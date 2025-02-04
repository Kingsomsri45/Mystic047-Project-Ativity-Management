<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
    <style>
        .carousel-background {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
        }
        *{
            font-family: 'Noto Sans Thai', sans-serif;
        }
    </style>
</head>
@extends('layout.master')
@section('content')
<body>
    <div class="container">
        <div class="row mt-4">
            <div class="container">
                <div class="carousel-background">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://science.bru.ac.th/wp-content/uploads/2022/10/slider-1-1-copy.jpg"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://science.bru.ac.th/wp-content/uploads/2022/10/slider-1-1-copy.jpg"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://science.bru.ac.th/wp-content/uploads/2022/10/slider-1-1-copy.jpg"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div class="card w-100 bg-white border-1">
                            <div class="card-header">
                                สมัครเข้าร่วมกิจกรรมออนไลน์
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover mb-4">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ข้อมูล</th>
                                            <th>ชื่อกิจกรรม</th>
                                            <th>การรับสมัคร</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>สถานะเปิดปิด</td>
                                            <td>ชื่อกิจจัดโดย .... <br>
                                                สถานที่ ......
                                            </td>
                                            <td>รับสมัครวันที่ .... จำนวนที่รับ ......
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>กิจกรรมที่ 2</td>
                                            <td>ไม่รับสมัคร</td>
                                            <td>ไม่รับสมัคร</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <!-- เพิ่ม Card อีก 2 ใบ -->
                    <div class="col-md-6">
                        <div class="card bg-white border-1">
                            <div class="card-header">
                                นักศึกษาที่มีชั่วโมงกิจกรรมมากที่สุด ( TOP 5)
                            </div>
                            <div class="card-body">
                                Content for card 1
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-white border-1">
                            <div class="card-header">
                                ติดตามข่าวสารเพิ่มเติมที่  สโมศรคณะวิทยาศาสตร์
                            </div>
                            <div class="card-body">
                                Content for card 2
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>
@endsection
</html>
