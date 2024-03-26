
 @php
 $socialIcons =  getContent('social_icon.element',false,'',1);
 $footer = getContent('footer.content', true)->data_values;

@endphp
<footer class="footer-section">
 <div class="container mx-auto">
     <div class="footer-content pt-100 pb-30">
         <div class="row">
             <div class="col-xl-6 col-lg-6 mb-50">
                 <div class="footer-widget">
                     <div class="footer-text">
                         <p class="text-start">{{ @$footer->information }}</p>
                     </div>
                     <div class="footer-social-icon">
                         <span>Follow us</span>
                         @foreach($socialIcons  as $key => $icon)
                         <a href="{{$icon->data_values->url}}" target="_blank"><i class="{{ $icon->data_values->social_icon }}"></i></a>
                         @endforeach
                     </div>
                 </div>
             </div>
             <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                 <div class="footer-widget">
                     <div class="footer-widget-heading">
                         <h3>Useful Links</h3>
                     </div>
                     <ul>
                         <li><a href="{{ route('home') }}">Home</a></li>
                         {{-- <li><a href="{{ route('user.property.add') }}">Add Listing <i class="las la-plus-circle"></i></a></li> --}}


                     </ul>
                 </div>
             </div>

         </div>
     </div>
 </div>
 <div class="copyright-area">
     <div class="container">
         <div class="row">
             <div class="col-12 text-center text-lg-left">
                 <div class="copyright-text">
                     {{-- <p>Copyright &copy; 2022, All Right Reserved <a href="#">Escroc</a> --}}
                     <p>
                         {{ @$footer->copy_right_text }} <a class="" href="{{ route('home') }}">{{ $general->sitename }}</a>
                     </p>
                 </div>
             </div>
         </div>
     </div>
 </div>
</footer>
