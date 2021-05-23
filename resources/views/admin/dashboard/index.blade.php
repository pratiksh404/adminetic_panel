@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Dashboard</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Default </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <h1 class="text-center">Welcome To Dashboard</h1>
        <br>
        <x-admin.card title="Basic Card" icon="fa fa-fire">
            <x-slot name="buttons">
                <button class="btn btn-primary">Button</button>
            </x-slot>
            <x-slot name="description">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit aliquam sed neque perspiciatis,
                </p>
            </x-slot>
            <x-slot name="content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto repellendus ratione ex
                fugit deserunt, ipsa tenetur illo iure, porro quaerat unde alias temporibus dolores voluptatum laborum
                aspernatur quis amet, atque debitis rem ipsum eligendi dolor et blanditiis. Itaque repellendus nam ab
                voluptate magnam! Doloremque cupiditate culpa illum veritatis eos minus atque quas distinctio non quo,
                necessitatibus quos ratione eligendi, assumenda asperiores aspernatur animi unde ipsam, ut praesentium.
                Placeat aperiam itaque fugit repellendus error nam! Officiis libero distinctio cumque tenetur dolorem odio
                eos aut qui sit, explicabo praesentium earum, alias expedita quis nam ad hic unde labore molestiae? Id
                repudiandae at quaerat dolore ex dolor porro possimus totam accusamus odit necessitatibus suscipit maiores,
                laborum quae illum quam recusandae, iste quasi ad velit enim autem! Fugiat provident consequatur molestias
                nulla, maxime cupiditate corrupti saepe commodi veritatis ipsum amet neque officiis natus unde consequuntur
                nemo perferendis nesciunt, laboriosam ut sit sunt alias porro mollitia. Magni iure voluptate beatae
                perspiciatis, sunt dicta fugiat facere, unde quia dolor nam ipsa voluptatum atque dolores cupiditate commodi
                eveniet laborum vero enim eos at architecto mollitia repudiandae in? Assumenda labore deleniti, consequatur
                eius minima, et debitis, accusamus numquam quos ipsam asperiores obcaecati doloribus? Facilis dolore placeat
                voluptatibus amet aut quaerat, laborum ad culpa assumenda iusto rerum nam cumque, molestiae accusamus sed
                accusantium, eum voluptate similique eos? Quos, repellendus? Dolores nemo nostrum quasi. Dolores deserunt
                modi at, inventore delectus reiciendis? Vitae natus laborum cupiditate similique voluptas. Iure id
                perspiciatis assumenda cumque incidunt unde consectetur. Itaque delectus sunt inventore. Dolores eos,
                dolorem repellendus tempore ipsum fugit? Perferendis nostrum iure vitae laboriosam odio non eius? Vero
                nesciunt dolorum ratione! Est magnam labore impedit ut soluta laudantium nulla aliquid error ratione.
                Officia quis ut fugit obcaecati, iure dolorum illo neque, molestias sed eum animi ducimus, esse placeat ad
                ipsa temporibus rem numquam velit cumque eveniet amet? Modi provident dolorum libero minima totam aliquid
                consequatur delectus maxime perspiciatis amet deleniti facilis asperiores molestiae voluptatum aspernatur
                porro officiis, velit quasi enim quis, magnam, cum quae recusandae ratione. Quasi nesciunt commodi possimus
                tempore maxime rerum illum? Eum, quidem assumenda nemo magnam laboriosam quibusdam? In obcaecati nostrum est
                labore ea eos nulla, optio velit assumenda hic tempora blanditiis id atque quibusdam facere officia delectus
                inventore explicabo aut veritatis pariatur alias praesentium maiores et. Dicta, optio. Libero, maxime. Ipsum
                quaerat, dolorem asperiores ut ea nam illum facilis! Quos quia dolor quibusdam fugit. Voluptate aspernatur
                quidem blanditiis aut ullam ipsam quis delectus maxime nulla. Aut exercitationem magni, eius asperiores
                dolorum tempore ratione minima! Sit unde ipsum alias ab iste, dolores impedit ratione cumque quaerat
                assumenda aliquam facilis, dolorem et necessitatibus, a beatae magnam eaque architecto libero minima
                voluptatem eos! In laudantium maiores commodi quaerat itaque! Suscipit unde ipsam commodi doloribus
                repudiandae quibusdam modi recusandae minima enim vel iure ducimus, tempora repellat perspiciatis ratione,
                quisquam fuga eos excepturi autem est velit cupiditate? Cumque laudantium nisi eum ut perspiciatis obcaecati
                est suscipit, voluptatem quasi eos veritatis vel autem fuga aliquam provident fugiat corporis? Recusandae
                exercitationem, placeat corporis perspiciatis ad quibusdam.
            </x-slot>
            <x-slot name="footer-content">This is footer content</x-slot>
        </x-admin.card>
    </div>
    <!-- Container-fluid Ends-->
@endsection
