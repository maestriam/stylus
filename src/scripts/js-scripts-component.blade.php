
<!-- General JS Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="@public('js/stisla.js')"></script>

<!-- JS Libraies -->

<!-- Template JS File -->
<script src="@public('modules/fullcalendar/dist/fullcalendar.min.js')"></script>
<script src="@public('modules/select2/dist/js/select2.full.min.js')"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="@public('modules/chart.js/dist/Chart.min.js')"></script>
<script src="@public('modules/bootstrap-daterangepicker/daterangepicker.js')"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<livewire:scripts />
<script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v1.x.x/dist/livewire-sortable.js"></script>
<script src="@public('js/scripts.js')"></script>
<script src="@public('js/custom.js')"></script>

<x-select2 />
<x-fullcalendar />
<x-chart-js />

@stack('scripts')