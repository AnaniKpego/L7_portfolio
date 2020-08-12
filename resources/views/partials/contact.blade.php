<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Contact</span>
                <h2 class="mb-4">Contact Me</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>

        <div class="row no-gutters block-9">
           <!-- Livewire Messages @livewire('messages') -->

            @livewire('messages')
           <!-- End Livewire Messages -->

            <div class="col-md-6 d-flex">
                <div class="img" style="background-image: url('{{asset('assets/images/about.jpg')}}');"></div>
            </div>
        </div>
    </div>
</section>