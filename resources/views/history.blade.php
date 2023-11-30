@extends('layout.app')
@section('appContents')
<style>
    .T2 {
        /* border: 4px solid black; */
        font-size: 150%;
        padding: 13px;
        text-align: center;
    }
    .history,main {
        background-color: rgb(174, 184, 199);
        /* min-height:calc(100vh - 149.93px -24); */
        padding-left: 150px;
        padding-right: 150px;
        padding: 15px 100px;
    }

    .historyin {
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
</style>
<div class="history">
    <div class="historyin">
        <h2 class="T2">History</h2>
        <hr>
        <h3 class="T3">Lorem</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque consequuntur dignissimos et obcaecati, necessitatibus inventore numquam culpa delectus, temporibus repellendus, vel eligendi debitis illum. Impedit expedita, adipisci nesciunt fuga mollitia at! Fugiat inventore optio dignissimos ut! Odio delectus nihil eius, expedita mollitia quibusdam iste numquam doloribus vel eveniet minima consectetur molestias nesciunt ipsum sint voluptatem cumque quod. Dolorem et rerum veniam, omnis quasi saepe optio sunt nulla officia sit libero possimus est. Corporis architecto delectus molestiae repellendus inventore porro natus quis. Qui quis natus dolor, similique, doloremque soluta at veniam officiis porro maiores totam officia ea illo perferendis quidem eius! Pariatur beatae est voluptas quis quibusdam architecto cumque vero eveniet veniam ex reiciendis sint cupiditate quam iste suscipit similique debitis, aliquam delectus, nihil non. Labore ducimus cumque fuga suscipit magnam. Officiis placeat nulla odit ratione, minima quod deserunt! Enim aliquam dolorum unde sit molestiae doloremque quibusdam, illum illo incidunt tempore temporibus voluptate assumenda ex similique corporis id debitis, in veritatis hic consectetur nesciunt. Laudantium ratione provident eligendi, ipsa eaque iste. Hic eius consequuntur dolorum praesentium recusandae iste minima aspernatur mollitia inventore expedita neque odio doloribus et omnis distinctio voluptatem voluptas ipsam sint quaerat accusamus, asperiores quos quod esse! Voluptatum, maxime?</p>
        <p>Saepe officiis dolorem blanditiis asperiores est earum reiciendis cum, ipsum odit sed doloribus ut? Repellat modi ea non, excepturi magnam incidunt nisi cum natus? Debitis molestias exercitationem tempora ab necessitatibus veritatis, numquam odit repudiandae quaerat obcaecati ipsa atque adipisci commodi cum amet earum consequatur eveniet? Nulla consectetur amet possimus saepe beatae, id soluta, nobis, ducimus culpa blanditiis eveniet quod! Debitis, architecto dolores temporibus iusto consequatur facilis harum explicabo culpa voluptatem rem corporis at quo cum molestiae! Nulla illum unde optio facilis, eius, tempora, quae nam voluptas ex ratione dolor? Aut repellendus ipsa quia praesentium nostrum cupiditate nobis incidunt explicabo, quas quis, quod minus corrupti voluptas nam alias consectetur tenetur corporis temporibus, neque dolore voluptatibus perferendis. Distinctio doloremque eaque debitis voluptates, recusandae voluptatum. Nulla quisquam accusamus ea mollitia cum, corrupti, asperiores, quam quos deserunt fuga aut dolore? Laborum alias expedita consequuntur provident. Sequi architecto minus ipsa magni similique esse, atque debitis eligendi, voluptates, ullam excepturi? Ex in facilis quisquam earum natus pariatur dicta doloremque exercitationem culpa voluptate debitis corrupti dolores explicabo, quo quae eligendi doloribus iste aspernatur ipsa! Blanditiis sit harum est modi, itaque eligendi laudantium, error sed vel ad, nesciunt ut ipsa suscipit tempore in unde excepturi tempora placeat dolorum.</p>
        <h3 class="T3">Lorem</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque consequuntur dignissimos et obcaecati, necessitatibus inventore numquam culpa delectus, temporibus repellendus, vel eligendi debitis illum. Impedit expedita, adipisci nesciunt fuga mollitia at! Fugiat inventore optio dignissimos ut! Odio delectus nihil eius, expedita mollitia quibusdam iste numquam doloribus vel eveniet minima consectetur molestias nesciunt ipsum sint voluptatem cumque quod. Dolorem et rerum veniam, omnis quasi saepe optio sunt nulla officia sit libero possimus est. Corporis architecto delectus molestiae repellendus inventore porro natus quis. Qui quis natus dolor, similique, doloremque soluta at veniam officiis porro maiores totam officia ea illo perferendis quidem eius! Pariatur beatae est voluptas quis quibusdam architecto cumque vero eveniet veniam ex reiciendis sint cupiditate quam iste suscipit similique debitis, aliquam delectus, nihil non. Labore ducimus cumque fuga suscipit magnam. Officiis placeat nulla odit ratione, minima quod deserunt! Enim aliquam dolorum unde sit molestiae doloremque quibusdam, illum illo incidunt tempore temporibus voluptate assumenda ex similique corporis id debitis, in veritatis hic consectetur nesciunt. Laudantium ratione provident eligendi, ipsa eaque iste. Hic eius consequuntur dolorum praesentium recusandae iste minima aspernatur mollitia inventore expedita neque odio doloribus et omnis distinctio voluptatem voluptas ipsam sint quaerat accusamus, asperiores quos quod esse! Voluptatum, maxime?</p>
        <p>Saepe officiis dolorem blanditiis asperiores est earum reiciendis cum, ipsum odit sed doloribus ut? Repellat modi ea non, excepturi magnam incidunt nisi cum natus? Debitis molestias exercitationem tempora ab necessitatibus veritatis, numquam odit repudiandae quaerat obcaecati ipsa atque adipisci commodi cum amet earum consequatur eveniet? Nulla consectetur amet possimus saepe beatae, id soluta, nobis, ducimus culpa blanditiis eveniet quod! Debitis, architecto dolores temporibus iusto consequatur facilis harum explicabo culpa voluptatem rem corporis at quo cum molestiae! Nulla illum unde optio facilis, eius, tempora, quae nam voluptas ex ratione dolor? Aut repellendus ipsa quia praesentium nostrum cupiditate nobis incidunt explicabo, quas quis, quod minus corrupti voluptas nam alias consectetur tenetur corporis temporibus, neque dolore voluptatibus perferendis. Distinctio doloremque eaque debitis voluptates, recusandae voluptatum. Nulla quisquam accusamus ea mollitia cum, corrupti, asperiores, quam quos deserunt fuga aut dolore? Laborum alias expedita consequuntur provident. Sequi architecto minus ipsa magni similique esse, atque debitis eligendi, voluptates, ullam excepturi? Ex in facilis quisquam earum natus pariatur dicta doloremque exercitationem culpa voluptate debitis corrupti dolores explicabo, quo quae eligendi doloribus iste aspernatur ipsa! Blanditiis sit harum est modi, itaque eligendi laudantium, error sed vel ad, nesciunt ut ipsa suscipit tempore in unde excepturi tempora placeat dolorum.</p>

    </div>
</div>
@stop
