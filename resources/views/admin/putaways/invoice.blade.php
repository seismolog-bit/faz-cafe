
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Laralink">
    <!-- Site Title -->
    <title>Invoice Belanja Keluar</title>
    <link rel="stylesheet" href="{{ asset('assets/invoice/css/style.css') }}">
</head>

<body>
    <div class="tm_container">
        <div class="tm_invoice_wrap">
            <div class="tm_invoice tm_style1 tm_radius_0" id="tm_download_section">
                <div class="tm_invoice_in">
                    <div class="tm_flex tm_flex_column_sm tm_justify_between tm_align_center tm_align_start_sm tm_f14 tm_primary_color tm_medium tm_mb5">
                        <p class="tm_m0 tm_f18 tm_bold">Invoice Belanja Keluar</p>
                        <p class="tm_m0">Tanggal: {{ $putaway->created_at->format('d-m-Y H:i') }}</p>
                        <p class="tm_m0">No Invoice: BK-{{ $putaway->id }}</p>
                    </div>
                    <div class="tm_grid_row tm_col_3 tm_padd_20 tm_accent_bg tm_mb25 tm_white_color tm_align_center">
                        <div>
                            <div class="tm_logo"><img src="{{ asset('assets/img/favicons/apple-touch-icon.png') }}" alt="Logo"></div>
                        </div>
                        <div>
                            +62 877-7611-2690 <br> www.fazcafeandballs.com
                        </div>
                        {{-- <div>
                            Sentraland Paradise RC 17-18, Parung Panjang, Bogor
                        </div> --}}
                        <div>
                            Sentraland Paradise RC 17-18, Parung Panjang, Bogor
                            {{-- Website: www.fazcafeandballs.com --}}
                        </div>
                    </div>
                    <div class="tm_invoice_head tm_mb10">
                        <div class="tm_invoice_left">
                            <p class="tm_mb2"><b class="tm_primary_color">Karyawan:</b></p>
                            <p>
                                {{ $putaway->user->name }}
                            </p>
                        </div>
                        <div class="tm_invoice_right tm_text_center">
                            {{-- <p class="tm_mb3"><b class="tm_primary_color">Total</b></p>
                            <div class="tm_f30 tm_bold tm_accent_color tm_padd_15 tm_accent_bg_10 tm_border_1 tm_accent_border_20 tm_mb5">
                                {{ number_format($receiving->receiving_items->sum('total')) }}
                            </div> --}}
                            {{-- <p class="tm_mb0"><i>Payment method: Creadit Card</i></p> --}}
                        </div>
                    </div>
                    <div class="tm_table tm_style1 tm_mb40">
                        <div class="tm_round_border tm_radius_0">
                            <div class="tm_table_responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="tm_width_3 tm_semi_bold tm_primary_color">Barang</th>
                                            <th class="tm_width_1 tm_semi_bold tm_primary_color tm_border_left">Qty</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($putaway->putaway_items as $item)
                                        <tr>
                                            <td class="tm_width_3">{{ $item->item->name }}</td>
                                            <td class="tm_width_1 tm_border_left">{{ $item->qty }} {{ $item->item->unit }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tm_invoice_footer tm_mb10">
                            <div class="tm_left_footer tm_mobile_hide">
                            </div>
                            <div class="tm_right_footer">
                                {{-- <table>
                                    <tbody>
                                        <tr class="tm_border_bottom tm_accent_bg_10">
                                            <td class="tm_width_3 tm_bold tm_f16 tm_accent_color">Total </td>
                                            <td class="tm_width_3 tm_bold tm_f16 tm_accent_color tm_text_right">{{ number_format($receiving->receiving_items->sum('total')) }}</td>
                                        </tr>
                                    </tbody>
                                </table> --}}
                            </div>
                        </div>
                    </div>
                    <p class="tm_bold tm_primary_color tm_m0">Catatan:</p>
                    <p class="tm_mb20">{{ $putaway->note }}</p>

                    
                    {{-- <p class="tm_bold tm_primary_color tm_m0">Catatan:</p> --}}
                    <p class="tm_m40">Invoice ini dinyatakan sah dan diproses secara komputasi. </p>
                </div>
            </div>
            <div class="tm_invoice_btns tm_hide_print">
                <a href="javascript:window.print()" class="tm_invoice_btn tm_color1">
          <span class="tm_btn_icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><circle cx="392" cy="184" r="24" fill='currentColor'/></svg>
          </span>
          <span class="tm_btn_text">Print</span>
        </a>
                <button id="tm_download_btn" class="tm_invoice_btn tm_color2">
          <span class="tm_btn_icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M320 336h76c55 0 100-21.21 100-75.6s-53-73.47-96-75.6C391.11 99.74 329 48 256 48c-69 0-113.44 45.79-128 91.2-60 5.7-112 35.88-112 98.4S70 336 136 336h56M192 400.1l64 63.9 64-63.9M256 224v224.03" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
          </span>
          <span class="tm_btn_text">Download</span>
        </button>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/invoice/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/invoice/js/jspdf.min.js') }}"></script>
    <script src="{{ asset('assets/invoice/js/html2canvas.min.js') }}"></script>
    <script src="{{ asset('assets/invoice/js/main.js') }}"></script>
</body>

</html>