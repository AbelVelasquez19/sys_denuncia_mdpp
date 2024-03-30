  <!-- Footer Start -->
  <div class="container-fluid text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s" style="background: #121212 !important"
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Ponerse en contacto</h4>
                <h2 class="text-primary mb-4">{{-- <i class="fa fa-car text-white me-2"></i> --}}MDPP</h2>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Call. 9 de Junio 100, Puente Piedra 15115</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(01) 219-6200</p>
               {{--  <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p> --}}
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Enlaces rápidos</h4>
                <a class="btn btn-link" href="{{route('index')}}">Denuncia Ambiental</a>
                <a class="btn btn-link" href="#">Denuncia Gou</a>
                <a class="btn btn-link" href="#">Denuncia anticorrupción</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Enlaces populares</h4>
                <a class="btn btn-link" href="https://portal.munipuentepiedra.gob.pe/">Portal web</a>
                <a class="btn btn-link" href="https://virtual.munipuentepiedra.gob.pe/">Mesa de partes virtual</a>
                <a class="btn btn-link" href="https://reclamos.servicios.gob.pe/?institution_id=135">Libro de reclamación</a>
                <a class="btn btn-link" href="https://pagoenlinea.munipuentepiedra.gob.pe/login">Pago en Linia</a>
                <a class="btn btn-link" href="https://www.mmlimanorte.gob.pe/">Mancomunidad Lima Norte</a>
                <a class="btn btn-link" href="https://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=10072&id_tema=1">Transparencia</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Boletin informativo</h4>
                {{-- <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control p-3 border-0" placeholder="Your Email Address">
                        <button class="btn btn-primary">Sign Up</button>
                    </div>
                </form> --}}
                <h6 class="text-white mt-4 mb-3">Síganos</h6>
                <div class="d-flex pt-2">
                    {{-- <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-twitter"></i></a> --}}
                    <a class="btn btn-square btn-outline-light me-1" href="https://www.instagram.com/municipalidad_puentepiedra/"  target="_black"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-0 me-1" href="https://www.instagram.com/municipalidad_puentepiedra/" target="_black"><i class="fab fa-instagram"></i></a>
                    {{-- <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-light me-0" href=""><i class="fab fa-linkedin-in"></i></a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid text-light py-4 wow fadeIn" data-wow-delay="0.1s" style="background: #000000 !important">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 link">
                &copy; <a href="#">Municipalidad Distrital de Puente Piedra</a>, todos los derechos reservados.
            </div>
            <div class="col-md-6 text-center text-md-end">
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Diseñado por <a href="https://portal.munipuentepiedra.gob.pe/" style="color:#852222">MDPP</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('asset/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('asset/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('asset/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('asset/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('asset/js/main.js')}}"></script>
<script src="{{asset('asset/js/app.js')}}"></script>
{{-- <script src="{{ mix('asset/js/app.js') }}"></script> --}}
</body>

</html>
