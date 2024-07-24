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
                        <td style="border: 1px solid #000;width:25%;">PATIENT AGE</td>
                        <td style="border: 1px solid #000;width:25%;">DATE</td>
                        <td style="border: 1px solid #000;width:25%;">PHONE NO.</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;width:25%;"> <b>{{ Str::upper($patientPdf->patient_name) }}</b> </td>
                        <td style="border: 1px solid #000;width:25%;">{{ $patientPdf->p_age }} YEAR'S</td>
                        <td style="border: 1px solid #000;width:25%;">{{ $patientPdf->created_at }}</td>
                        <td style="border: 1px solid #000;width:25%;">{{ $patientPdf->patient_number }}</td>
                    </tr>
                </table>
                <table width="1000" cellpadding="20" cellspacing="0">
                    <tr>
                        <td style="border: 1px solid #000;width:50%;">
                            DOCTOR
                        </td>
                        <td style="border: 1px solid #000;width:50%;">
                            <b> {{ $patientPdf->doctors->d_name }} </b> <br>
                            <span>{{ $patientPdf->doctors->d_qualifications }}</span> <br>
                            <span>Phone No: {{ $patientPdf->doctors->d_phone }}</span> <br>
                        </td>
                    </tr>
                </table>
                <table width="1000" cellpadding="20" cellspacing="0">
                    <tr>
                        <td style="border: 1px solid #000;width:70%;"> <b>DESCRIPTION</b> </td>
                        <td style="border: 1px solid #000;width:30%;"> <b>PAYMENT STATUS</b> </td>
                    </tr>
                </table>
                <table width="1000" cellpadding="10" cellspacing="0">
                    <tr>
                        <td style="border: 1px solid #000;width:70%;">1. CONSULTING FEE</td>
                        <td style="border: 1px solid #000;width:30%; text-align:right;"> <b>{{ $patientPdf->doctors->d_fee }}</b> BDT</td>
                    </tr>
                </table>
                <table width="1000" cellpadding="10" cellspacing="0">
                    <tr>
                        <td style="border: 1px solid #000;width:70%;">2. TOTAL PAYED AMOUNT</td>
                        <td style="border: 1px solid #000;width:30%; text-align:right;"> <b>{{ $patientPdf->p_payment + $patientPdf->p_due_payment }}</b> BDT</td>
                    </tr>
                </table>
                <table width="1000" cellpadding="10" cellspacing="0">
                    <tr>
                        <td style="border: 1px solid #000;width:70%;">3.DISCOUNT</td>
                        <td style="border: 1px solid #000;width:30%; text-align:right;"><b>{{ $patientPdf->p_discount }}</b> BDT</td>
                    </tr>
                </table>
                <table width="1000" cellpadding="10" cellspacing="0">
                    <tr>
                        <td style="border: 1px solid #000;width:70%;">4. DUE</td>
                        <td style="border: 1px solid #000;width:30%; text-align:right;"> <b>{{ $patientPdf->doctors->d_fee - ($patientPdf->p_payment + $patientPdf->p_discount + $patientPdf->p_due_payment)  }}</b> BDT</td>
                    </tr>
                </table>
                <table width="1000" cellpadding="10" cellspacing="0">
                    <tr>
                        <td style="border: 1px solid #000;width:70%;"> <b>5. TOTAL</b> </td>
                        <td style="border: 1px solid #000;width:30%; text-align:right;"> <b>{{  $patientPdf->doctors->d_fee  }}</b> BDT</td>
                    </tr>
                </table>


                <table width="1000" cellpadding="10" cellspacing="0">
                    <tr>
                        <td style="border: 1px solid #000;width:70%;"> <h1 style="text-align: right">
                           {{ $patientPdf->doctors->d_fee - ($patientPdf->p_payment + $patientPdf->p_discount + $patientPdf->p_due_payment) <= 0 ? 'PAID' : 'DUE' }}    
                        </h1> </td>
                    </tr>
                </table>
                





                
                
            </td>
        </tr>
    </table>
</body>
</html>