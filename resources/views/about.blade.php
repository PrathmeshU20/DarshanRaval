@extends('layout.app')
@section('appContents')
<style>
    .T2 {
        /* border: 4px solid black; */
        font-size: 150%;
        padding: 13px;
        text-align: center;
    }

    .about,
    main {
        background-color: rgb(174, 184, 199);
        /* min-height:calc(100vh - 149.93px -24); */
        padding-left: 150px;
        padding-right: 150px;
        padding: 15px 100px;
    }

    .aboutin {
        border-radius: 15px;
        background-color: rgb(180, 196, 220);
        /* margin: 20px auto; */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 10px 70px;
    }

    .T3 {
        /* border: 4px solid black; */
        font-size: 130%;
        padding: 13px;
        ;
    }

    #DarshanPic {
        border-color: black;
        border-width: 2px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
        margin: 15px;
        float: left;
    }

    #DarshanPic:hover {
        transform: scale(1.2);
    }

    .aboutText p {
        margin-top: 8px;
        margin-bottom: 8px;
    }
</style>
<div class="about">
    <div class="aboutin">
        <h2 class="T2">About</h2>
        <hr>
        <img src="../Images/Profile.jpg" alt="Darshan Raval" id="DarshanPic">
        <div class="aboutText">
            <h3 class="T3">lorem</h3>
            <p>Darshan Raval (born 18 October 1994) is an Indian singer, composer, and songwriter. He is known for his work in different languages including Hindi, Gujarati, Punjabi and Bengali. In 2014, he participated in the StarPlus music reality show, India's Raw Star, finishing as the first runner-up.</p>
            <p>Darshan Raval was born on October 18, 1994, in Ahmedabad, Gujarat, India, into a Gujarati Hindu family. His father, Rajendra Raval, is a freelance writer, and his mother, Rajal Raval, is a housewife.</p>
            <p>Before he entered into the entertainment industry, Raval faced academic challenges and was expelled from college due to poor academic performance.</p>
            <hr>
            <p>Raval's career began in 2014, when he participated in the reality show India's Raw Star and was declared the first runner-up. Raval has mentioned the support of Himesh Reshammiya as an important factor in his initial success in the Bollywood industry.</p>
            <p>As of 2023, he has released several popular songs in different languages, including Hindi, Gujarati, and Telugu. Some of his notable works include "Ek Ladki Ko Dekha Toh Aisa Laga," "Chogada", and "Kheech Meri Photo"</p>
            <p>Raval was ranked in The Times Most Desirable Men at No. 45 in 2017. He won awards for Transmedia Gujarati Screen and Stage Award for Best Male Singer.</p>
        </div>
    </div>
</div>
@stop
