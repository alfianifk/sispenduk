</div>

<footer>
    <div class="container">
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>{{ date("Y") }} &copy; Mazer</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill"></i></span> by <a
                    href="https://www.instagram.com/alfiani.fk">Alfiani Fitria Kusnadi</a></p>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<script src="{{ asset("assets/js/bootstrap.js") }}"></script>
<script src="{{ asset("assets/js/app.js") }}"></script>
<script src="{{ asset("assets/js/pages/horizontal-layout.js") }}"></script>

<script src="{{ asset("assets/extensions/apexcharts/apexcharts.min.js") }}"></script>
<script src="{{ asset("assets/js/pages/dashboard.js") }}"></script>
<script src="assets/extensions/summernote/summernote-lite.min.js"></script>
<script src="assets/static/js/pages/summernote.js"></script>


{{-- <script>
    var mymap = L.map('mapid').setView([-7.374, 108.250], 13);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 20,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoiYWxmaWFuaWZrIiwiYSI6ImNsbG1pY2RjODJmbmszc25nYng3Zms4YWkifQ.EO2E7Q2osJhPxgDVSYLBog'
    }).addTo(mymap);
</script> --}}

</body>

</html>
