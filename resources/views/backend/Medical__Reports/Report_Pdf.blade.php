<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
    <style>
        body{
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <table width="1000" align="center" cellspacing="0" cellpadding="0" border="0">
        <tr>

            <td>
                
                {{-- :: 1ST ONE :: --}}
                <table width="100%" style="background-color: #ccc; padding:10px;">
                    <tr>
                        <td width="30%">
                            <h1>Logo.</h1>
                        </td>
                        <td width="70%" align="right">
                            <p style="margin:0;">Lorem ipsum dolor sit amet.</p>
                            <p style="margin:0;">Lorem ipsum </p>
                            <a href="#">+880 1647465050</a> <br>
                            <a href="#">+880 1777797143</a>
                        </td>
                    </tr>

                </table>
                {{-- :: 1ST ONE END:: --}}
                
                
                {{-- :: INVOICE :: --}}
                <table width="100%">
                    <tr>
                        <td>
                            <h1 style="text-align: center;">INVOICE</h1>
                        </td>
                    </tr>
                </table>
                {{-- :: INVOICE :: --}}

      



                <table width="1000" cellpadding="20" cellspacing="0">
                    <tr>
                        <td style="border: 1px solid #000;width:25%;">PATIENT NAME</td>
                        <td style="border: 1px solid #000;width:25%;">PHONE NO.</td>
                    </tr>
                    
                </table>
                
                <table width="1000" cellpadding="20" cellspacing="0">
                    <tr>
                        <td style="border: 1px solid #000;width:70%;"> <b>DESCRIPTION</b> </td>
                        <td style="border: 1px solid #000;width:30%;"> <b>PAYMENT STATUS</b> </td>
                    </tr>
                </table>

                @php
                    $total = 0;
                @endphp

                @forelse ($reports as $key => $report)
                <table width="1000" cellpadding="10" cellspacing="0">
                    <tr>
                        <td style="border: 1px solid #000;width:70%;">{{++$key. '.' . $report->report_name }}</td>
                        <td style="border: 1px solid #000;width:30%; text-align:right;"> <b>{{ $report->report_price }}</b> BDT</td>
                    </tr>
                </table>
                @php
                    $total += $report->report_price;
                @endphp
                @empty
                <table width="1000" cellpadding="10" cellspacing="0">
                    <tr>
                        <td style="border: 1px solid #000;width:70%;">No Data Found!</td>
                    </tr>
                </table>
                @endforelse
                
               

                <table width="1000" cellpadding="10" cellspacing="0">
                    <tr>
                        <td style="border: 1px solid #000;width:70%;"><b>Total</b></td>
                        <td style="border: 1px solid #000;width:70%; text-align:right;"> <b>{{ $total }} BDT</b> </td>
                    </tr>
                </table>


                <table width="1000" cellpadding="10" cellspacing="0">
                    <tr>
                        <td style="border: 1px solid #000;width:70%;"> <h1 style="text-align: right">
                           Paid 
                        </h1></td>
                    </tr>
                </table>
                





                
                
            </td>
        </tr>
    </table>
</body>
</html>