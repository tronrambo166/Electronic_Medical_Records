<?php

namespace App\Console\Commands;

use App\Models\Escroc;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;

class EscrocReleased extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'released:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command update escroc data where have released date over';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $currentDateTime = Carbon::now();
        $release =  Escroc::where('status',2)->where('released_date','!=',null)->get();

        foreach( $release as $data){

        if ($currentDateTime > $data->released_date) {
        // buyer
            if ($data->role_type == 'buyer') {
                $buyer = $data->user;
            } else {
                $buyer = $data->receiver;
            }
            // seller
            if ($data->receiver_role_type == 'seller') {
                $seller = $data->receiver;
            } else {
                $seller = $data->user;
            }

            //found return amount
            if ($data->fees_type =='buyer') {
                $buyerAmount = $data->amount + $data->charge;
                $sellerAmount = $data->amount ;
                $charge = $data->charge ;
                $userId  = $buyer->id;
                $userBalance  = $buyer->balance;
            } elseif ($data->fees_type =='seller') {
                $buyerAmount = $data->amount;
                $sellerAmount = $data->amount - $data->charge;
                $charge = $data->charge ;
                $userId  = $seller->id;
                $userBalance  = $seller->balance;
            } elseif ($data->fees_type =='both') {
                $buyerAmount = $data->amount + $data->charge;
                $sellerAmount = $data->amount - $data->charge;
                $charge = $data->charge ;
            }
            //send balance
            $sellerDetail = User::where('id', $seller->id)->where('status', 1)->first();
            $sellerDetail->balance += $sellerAmount;
            $sellerDetail->save();

            $data->status = 6;
            $data->released_date = null;
            $data->save();

            // profit Logs
            if ($data->fees_type =='both') {
                $sender = new Transaction();
                $sender->user_id = $buyer->id;
                $sender->amount = $data->amount;
                $sender->post_balance = $buyer->balance;
                $sender->charge =  $charge;
                $sender->trx_type = 'Escroc Transaction (Buyer)';
                $sender->details = 'Escroc Transaction (Buyer)';
                $sender->trx = $data->trx;
                $sender->save();

                $receiverTrx = new Transaction();
                $receiverTrx->user_id = $seller->id;
                $receiverTrx->amount = $data->amount;
                $receiverTrx->post_balance = $seller->balance;
                $receiverTrx->charge =  $charge;
                $receiverTrx->trx_type = 'Escroc Transaction (Seller)';
                $receiverTrx->details = 'Escroc Transaction (Seller)';
                $receiverTrx->trx = $data->trx;
                $receiverTrx->save();
            } elseif ($data->fees_type =='buyer') {
                $transaction = new Transaction();
                $transaction->user_id = $userId;
                $transaction->amount = $data->amount;
                $transaction->post_balance = $userBalance;
                $transaction->charge =  $charge;
                $transaction->trx_type = 'Escroc Transaction (Buyer)';
                $transaction->details = 'Escroc Transaction (Buyer)';
                $transaction->trx = $data->trx;
                $transaction->save();
            } elseif ($data->fees_type =='seller') {
                $transaction = new Transaction();
                $transaction->user_id = $userId;
                $transaction->amount = $data->amount;
                $transaction->post_balance = $userBalance;
                $transaction->charge =  $charge;
                $transaction->trx_type = 'Escroc Transaction (Seller)';
                $transaction->details = 'Escroc Transaction (Seller)';
                $transaction->trx = $data->trx;
                $transaction->save();
            }
        }

        }//foreach end
        echo "done";
    }
}
