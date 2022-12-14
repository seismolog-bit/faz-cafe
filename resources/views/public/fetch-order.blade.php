<div class="row justify-content-center m-0">

@foreach ($datas as $order)
<div class="col-md-4 col-lg-3 py-3">
    <div class="card card-bordered">
        <div class="card-body p-3">
            <div class="row">
                <div class="col-sm-6">{{ $order->table->name }} - Lantai {{ $order->table->floor }}</div>
                <div class="col-sm-6 text-end">
                    <h4 data-countdown="{{ Carbon\Carbon::parse($order->end_time)}}"></h4>
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