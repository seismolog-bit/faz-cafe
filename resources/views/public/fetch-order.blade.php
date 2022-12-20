<div class="row justify-content-center m-0">

@foreach ($datas as $order)
<div class="col-md-4 col-lg-3 py-4">
    <div class="card card-bordered">
        <div class="card-body p-4">
            <div class="row">
                <div class="col-sm-6">
                    <h1>{{ $order->table->name }} - Lantai {{ $order->table->floor }}</h1>
                </div>
                <div class="col-sm-6 text-end">
                    <h1 data-countdown="{{ Carbon\Carbon::parse($order->end_time)}}"></h1>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function() {
        $('[data-countdown]').each(function() {
            var $this = $(this), finalDate = $(this).data('countdown');
            $this.countdown(finalDate, function(event) {
                $this.html(event.strftime('%H:%M:%S'));
            });
        });
    });
</script>

@endforeach

</div>