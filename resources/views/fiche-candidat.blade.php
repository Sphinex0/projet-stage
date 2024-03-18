<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            margin-inline: 5rem;
            padding: 1rem;

        }
        .header{
            display: flex;
            justify-content: space-around;
            align-items: center;
            border-bottom: 2px lightgray solid ;


        }
        .header p{
            width:200px;
            text-align: center;
            font-size: 18px;
        }
        .body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-top: 2rem;
            padding-bottom: 2rem

        }
        .body table tr td{
            padding: 15px;
        }
        .body table td+td{width: 20%
            
            }
        footer{
            position: relative;
            bottom: 0;
            border-top: 2px lightgray solid ;
            text-align: center;
            padding: 10px;
            


        }
    </style>

</head>
<body>
<div class="header" >
    <p style="width:300px;    ">Royaume du maroc <br>
        Université mohammed premier <br>
        École Nationale des Sciences Appliquées
        Oujda</p>
        <img src="/images/logo.png" alt="logo" height="100px">
        <p>
            المملكة المغربية
جامعة محمد الأول
المدرسة الوطنية للعلوم التطبيقية
وجدة
        </p>
</div>
<div class="header" >
<h1>REÇU DE CANDIDATURE : 2024/2025</h1>
</div>
<div class="body" >

   
    
    <table>
        <tr>
            <td>NOM :</td>
            <td> {{ $candidature->nom }}</td>
        </tr>
        <tr>
            <td>PRENOM :</td>
            <td>{{ $candidature->prenom }}</td>
        </tr>        <tr>
            <td>DATE DE NAISSANCE :</td>
            <td>{{ $candidature->date_naissance }}</td>
        </tr>

        <tr>
            <td>CIN :</td>
            <td>{{ $candidature->cin }}</td>
        </tr>
        <tr>
            <td>CNE :</td>
            <td> {{ $candidature->cne_cme }}</td>
        </tr>
        <tr>
            <td>ADRESSE :</td>
            <td>{{ $candidature->adresse }}</td>
        </tr>
        <tr>
            <td>PAYS D'ORIGINE :</td>
            <td>{{ $candidature->nationalite }}</td>
        </tr>
        <tr>
            <td>N° TELEPHONE :</td>
            <td>{{ $candidature->num_tel }}</td>
        </tr>
        <tr>
            <td>DIPLOME :</td>
            <td>{{ $candidature->diplome->etablissement }}</td>
        </tr>



    </table>


    </div>

    
        <footer >
            0536505471/0536505470  : الهاتف  , B.Pالمدرسة الوطنية للعلوم التطبيقية - وجدة مجمع جامعة وجدة 699    
        </footer>    
    
</body>
</html>