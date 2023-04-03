<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ALBA</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">

    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-orig.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1c2cd205de.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <style>
        body{
            font-family: 'Dosis';
            background: #f7fafc;
        }
    </style>
    <!-- script ajax para preenchimento de combobox dinamico -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#predio').change(function (e) {
                $('#ala').empty();
                var id = $(this).val();

                $.get('/pesq/ambientes/get-alas/'+id, function (alas) {
                    var cmb = '<option value="">Selecione a Ala</option>';
                    $.each(alas, function (key, value) {
                       cmb = cmb + '<option value="' + key + '">' + value + '</option>';
                    });
                    $('#ala').html(cmb);
                }, 'json');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function (){
            $('#ala').change(function (e) {
                $('#andar').empty();
                var id = $(this).val();

                $.get('/pesq/ambientes/get-andars/'+id, function (andars) {
                    var cmb2 = '<option value="">Selecione o andar</option>';
                    $.each(andars, function (key, value) {
                        cmb2 = cmb2 + '<option value="' + key + '">' + value + '</option>';
                    });
                    $('#andar').html(cmb2);
                }, 'json');
            });
        });
    </script>
</head>
