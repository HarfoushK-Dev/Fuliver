<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>w3newbie HTML Email</title>
    <style type="text/css">

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

	body {
		margin: 0;
        padding: 0;
        box-sizing: border-box;
		background-color: #B6B6B6;
	}

	table {
		border-spacing: 0;
	}

	td {
		padding: 0;
	}

	img {
		border: 0;
	}

    .wrapper {
        width: 100%;
        table-layout: fixed;
        background-color: #B6B6B6;
        padding: 50px 20px;
    }

    .main {
        background-color: #ffffff;
        margin: 0 auto;
        width: 100%;
        max-width: 450px;
        padding: 25px;
        border-spacing: 0;
        border-radius: 7px;
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
    }

	@media screen and (max-width: 600px) { 
        .main {
            padding: 15px;
        }
	}

</style>
</head>
<body>

    <center class="wrapper">

        <table class="main" width="100%">

            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td align="center">
                                <img src="https://media-exp1.licdn.com/dms/image/C4D0BAQFONi6u579qYg/company-logo_200_200/0/1637298912632?e=1661385600&v=beta&t=mUBsfI-9hPfj-2Eflym9QI21QGxQaVsXI5SeW92AZFE" alt="" width="150">
                            </td>
                        </tr>
                    </table> 
                </td>
            </tr>

            <tr>
                <td>
                    <table width="100%" style="padding: 10px 0px; text-align: center;">
                        <tr>
                            <td align="center">
                                <span style="font-size: 14px;">This email has been submitted from 'Contact Us Page'</span>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <span style="font-size: 24px; font-weight: 700;">{{ $dataRecieved['emailAddress'] }}</span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td>
                    <table width="100%" style="font-size: 18px;">
                        <tr>
                            <td>
                                <b style="color: #046DFB; padding-right: 10px; font-weight: 700;">Name:</b>
                                <span style="text-transform: capitalize;">{{ $dataRecieved['fullName'] }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b style="color: #046DFB; padding-right: 10px; font-weight: 700;">Phone Number:</b>
                                @if ($dataRecieved['phoneNumber'] == '') 
                                    <span style="text-transform: capitalize;">N/A<sup style="font-size: 10px;">Not Applicable</sup></span>
                                @else
                                    <span style="text-transform: capitalize;">{{ $dataRecieved['phoneNumber'] }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b style="color: #046DFB; padding-right: 10px; font-weight: 700;">Subject:</b>
                                @if ($dataRecieved['subject'] == '') 
                                    <span style="text-transform: capitalize;">N/A<sup style="font-size: 10px;">Not Applicable</sup></span>
                                @else
                                    <span style="text-transform: capitalize;">{{ $dataRecieved['subject'] }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b style="color: #046DFB; font-weight: 700;">Message:</b>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span style="text-transform: capitalize;">{{ $dataRecieved['message'] }}</span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

        </table>

    </center>

</body>
</html>
