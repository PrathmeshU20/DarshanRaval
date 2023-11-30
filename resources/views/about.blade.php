@extends('layout.app')
@section('appContents')
<style>
    .T2 {
        /* border: 4px solid black; */
        font-size: 150%;
        padding: 13px;
        text-align: center;
    }
    .about,main {
        background-color: rgb(174, 184, 199);
        /* min-height:calc(100vh - 149.93px -24); */
        padding-left: 150px;
        padding-right: 150px;
        padding: 15px 100px;
    }

    .aboutin {
        border-radius: 1%;
        background-color: rgb(180, 196, 220);
        /* margin: 20px auto; */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 10px 70px;
    }
</style>
<div class="about">
    <div class="aboutin">
        <h2 class="T2">About</h2>
        <hr>
    </div>
</div>
@stop
