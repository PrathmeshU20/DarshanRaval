@extends('layout.app')
<style>
    .T2 {
        /* border: 4px solid black; */
        font-size: 150%;
        padding: 13px;
        text-align: center;
    }
    .T3 {
        /* border: 4px solid black; */
        font-size: 130%;
        padding: 13px;
        text-align: center;
    }
    .home,main {
        background-color: rgb(174, 184, 199);
        /* min-height:calc(100vh - 149.93px -24); */
        padding: 15px 100px;
    }
    .homein {
        border-radius: 1%;
        background-color: rgb(180, 196, 220);
        /* margin: 20px auto; */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .HImages {
        border: 0.5px solid rgb(0, 0, 0);
        display: inline;
        box-sizing: border-box;
        width: 192px;
        height: 512px;
        object-fit: cover;
        object-position: top;

    }
    .HImgDiv {
        width: 100%;
        flex: auto;
    }
    .songRecc {
        margin: auto;
        width: 100%;
        flex: auto;
        align-content: center;
    }
    .songimg {
        border: 0.5px solid rgb(0, 0, 0);
        display: inline;
        box-sizing: border-box;
        width: 163px;
        height: 163px;
        object-fit: fill;
        object-position: top;
    }
    .songRecc a {
        flex: auto;
        align-content: center;
        margin: 0%;
        text-align: center;
    }
    .songlink {
        width: 163px;
    }
</style>
@section('appContents')
<div class="home">
    <div class="homein">
    <h2 class="T2">Home</h2><hr>
        <div class="HImgDiv flex flex-row p-4 space-x-5 content-center flex-grow-0 ">
            <img src="../Images/IMG-20231129-WA0010.jpg" alt="Darshan Raval Images" class="HImages basis-1/3 ">
            <img src="../Images/IMG-20231129-WA0004.jpg" alt="Darshan Raval Images" class="HImages basis-1/3 ">
            <img src="../Images/IMG-20231129-WA0013.jpg" alt="Darshan Raval Images" class="HImages basis-1/3 ">
        </div>
    <hr>
    <h3 class="T3">Latest Songs</h3>
    <div class="latestsong">
        <div class="songRecc flex flex-row p-4 space-x-5 content-center flex-grow-0 ">
            <a href="https://open.spotify.com/track/0Jiaz0O4AqnJICa9PxHhaR?si=0a3d42cc51234423" class=" songlink"><img src="../Images/songs/song1.jpg" alt="Darshan Raval Images" class="songimg "></a>
            <a href="https://open.spotify.com/track/0rMeOAvbQZ2RTG4B6L1M4p?si=342efbc5d85243df" class=" songlink"><img src="../Images/songs/song2.jpg" alt="Darshan Raval Images" class="songimg "></a>
            <a href="https://open.spotify.com/track/3YLgvuHhHlfEAIR5JSPOZM?si=d9b7303d6aa44b6d" class=" songlink"><img src="../Images/songs/song3.jpg" alt="Darshan Raval Images" class="songimg "></a>
            <a href="https://open.spotify.com/track/3Rvdqwgbr3rryZkNRrItt3?si=cac8c05bcd2946c3" class=" songlink"><img src="../Images/songs/song4.jpg" alt="Darshan Raval Images" class="songimg "></a>
            <a href="https://open.spotify.com/track/1L3Nsi7YXtBxTdnbqektia?si=f6f337c13a6a48ef" class=" songlink"><img src="../Images/songs/song5.jpg" alt="Darshan Raval Images" class="songimg "></a>

        </div>
    </div>
    </div>
</div>
@stop
