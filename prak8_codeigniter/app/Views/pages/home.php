<?= $this->extend('layout/template'); ?>

    <?= $this->section('content'); ?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Welcome to IoT Pages!!</h1>
                    <details open>
                        <summary>Apa itu IoT?</summary>
                            <div class="faq__content">
                                <p>IoT atau Internet of things merupakan sebuah konsep di mana suatu benda atau objek ditanamkan teknologi-teknologi seperti sensor dan software dengan tujuan untuk berkomunikasi, mengendalikan, menghubungkan, dan bertukar data melalui perangkat lain selama masih terhubung ke internet. </p>
                            </div>
                    </details>
                    <details>
                        <summary>Contoh IoT</summary>
                            <div class="faq__content">
                                <p>Adapun contoh penerapan iot pada kehidupan sehari-hari yaitu smart home,sistem keamanan biometrik, mobil pintar,dll</p>
                            </div>
                        </details>
                    </details>
                </div>
            </div>
        </div>



        <?= $this->endSection(); ?>