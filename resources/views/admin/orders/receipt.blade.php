<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Laralink">
    <title>Struk #{{ $order->code }} | DI' Perfects - Beauty & Authentic Perfume</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap');

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        body {
            /* color: #000000; */
            font-size: 10px;
            font-weight: 400;
            line-height: 1.4em;
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #f5f6fa;
        }

        .tm_pos_invoice_wrap {
            max-width: 340px;
            margin: auto;
            margin-top: 30px;
            padding: 5px 5px;
            background-color: #fff;
        }

        .tm_pos_company_logo {
            display: flex;
            justify-content: center;
            margin-bottom: 7px;
        }

        .tm_pos_company_logo img {
            vertical-align: middle;
            border: 0;
            max-width: 100%;
            height: auto;
            max-height: 45px;
        }

        .tm_pos_invoice_top {
            text-align: center;
            margin-bottom: 18px;
        }

        .tm_pos_invoice_heading {
            display: flex;
            justify-content: center;
            position: relative;
            text-transform: uppercase;
            font-size: 10px;
            font-weight: 500;
            margin: 10px 0;
        }

        .tm_pos_invoice_heading:before {
            content: '';
            position: absolute;
            height: 0;
            width: 100%;
            left: 0;
            top: 46%;
            border-top: 1px dashed #000000;
        }

        .tm_pos_invoice_heading span {
            display: inline-flex;
            padding: 0 5px;
            background-color: #fff;
            z-index: 1;
            font-weight: 500;
        }

        .tm_list.tm_style1 {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
        }

        .tm_list.tm_style1 li {
            display: flex;
            width: 50%;
            font-size: 10px;
            line-height: 1.2em;
            margin-bottom: 7px;
        }

        .text-right {
            text-align: right;
            justify-content: flex-end;
        }

        .tm_list_title {
            color: #111;
            margin-right: 4px;
            font-weight: 500;
        }

        .tm_invoice_seperator {
            width: 150px;
            border-top: 1px dashed #000000;
            margin: 9px 0;
            margin-left: auto;
        }

        .tm_pos_invoice_table {
            width: 100%;
            margin-top: 10px;
            line-height: 1.3em;
        }

        .tm_pos_invoice_table thead th {
            font-weight: 500;
            color: #111;
            text-align: left;
            padding: 8px 3px;
            border-top: 1px dashed #000000;
            border-bottom: 1px dashed #000000;
        }

        .tm_pos_invoice_table td {
            padding: 4px;
        }

        .tm_pos_invoice_table tbody tr:first-child td {
            padding-top: 10px;
        }

        .tm_pos_invoice_table tbody tr:last-child td {
            padding-bottom: 10px;
            border-bottom: 1px dashed #000000;
        }

        .tm_pos_invoice_table th:last-child,
        .tm_pos_invoice_table td:last-child {
            text-align: right;
            padding-right: 0;
        }

        .tm_pos_invoice_table th:first-child,
        .tm_pos_invoice_table td:first-child {
            padding-left: 0;
        }

        .tm_pos_invoice_table tr {
            vertical-align: baseline;
        }

        .tm_bill_list {
            list-style: none;
            margin: 0;
            padding: 12px 0;
            border-bottom: 1px dashed #000000;
        }

        .tm_bill_list_in {
            display: flex;
            text-align: right;
            justify-content: flex-end;
            padding: 3px 0;
        }

        .tm_bill_title {
            padding-right: 20px;
        }

        .tm_bill_value {
            width: 90px;
        }

        .tm_bill_value.tm_bill_focus,
        .tm_bill_title.tm_bill_focus {
            font-weight: 500;
            color: #111;
        }

        .tm_pos_invoice_footer {
            text-align: center;
            margin-top: 20px;
        }

        .tm_pos_sample_text {
            text-align: center;
            padding: 12px 0;
            border-bottom: 1px dashed #000000;
            line-height: 1.6em;
            color: #000000;
            font-size: 9px;
        }

        .tm_pos_company_name {
            font-weight: 500;
            color: #111;
            font-size: 10px;
            line-height: 1.4em;
        }
    </style>
</head>

<body>
    <div class="tm_pos_invoice_wrap">
        <div class="tm_pos_invoice_top">
            <div class="">
                <img src="{{ asset('assets/img/icons/logo.png') }}" alt="" style="width: 72px; height: 72px;">
            </div>
            <div class="tm_pos_company_name">FAZ CAFE & BALLS</div>
            <div class="tm_pos_company_address">Sentraland Paradise, RC 17-18, Parung Panjang, Bogor</div>
            <div class="tm_pos_company_mobile">Tel. 0821-6141-6162</div>
        </div>
        <div class="tm_pos_invoice_body">
            {{-- <div class="tm_pos_invoice_heading"><span>Struk pembayaran</span></div> --}}
            <ul class="tm_list tm_style1">
                <li>
                    <div class="tm_list_title">Nama:</div>
                    <div class="tm_list_desc">{{ $order->buyer }}</div>
                </li>
                <li class="text-right">
                    <div class="tm_list_title">Invoice:</div>
                    <div class="tm_list_desc">#{{ $order->invoice }}</div>
                </li>
                <li>
                    <div class="tm_list_title">Kasir:</div>
                    <div class="tm_list_desc"> {{ $order->user->name }}</div>
                </li>
                <li class="text-right">
                    <div class="tm_list_title">Tanggal:</div>
                    <div class="tm_list_desc"> {{ $order->created_at->format('d-m-Y') }}</div>
                </li>
            </ul>
            <table class="tm_pos_invoice_table">
                <thead>
                    <tr>
                        <th>Uraian</th>
                        <th>Harga</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->order_items as $item)
                    <tr>
                        <td>{{ $item->product->name }} x {{ $item->qty }}</td>
                        <td>
                            {{ number_format($item->price) }} 
                        </td>
                        <td>{{ number_format($item->grand_total) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="tm_bill_list">
                <div class="tm_bill_list_in">
                    <div class="tm_bill_title tm_bill_focus">Total :</div>
                    <div class="tm_bill_value tm_bill_focus">{{ number_format($order->grand_total) }}</div>
                </div>
            </div>
            <div class="tm_pos_sample_text">*Invoice ini dinyatakan sah dan diproses oleh komputer.
                Silakan hubungi Customer Service apabila kamu membutuhkan bantuan.</div>
            <div class="tm_pos_invoice_footer">With love Faz Cafe & Balls</div>
        </div>
    </div>
</body>

</html>