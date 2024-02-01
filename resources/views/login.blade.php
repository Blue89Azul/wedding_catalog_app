<x-layout>
    <div class="h-100 w-100 d-flex justify-content-center align-items-center background-style">
        <div class="bg-light col-md-4 col-11 title-font">
            <form class="p-3 m-0 border rounded-3" action="logic/loginLogic" method="post">
                <div class="h-auto">
                <h1 class="text-center" style="letter-spacing:0.25rem; color: #663300; text-shadow: 1px 2px 3px #808080; font-size:3.5em;">Happy Wedding</h1>

                @if (session('error'))
                    <div class="w-100 alert alert-danger text-center">ログインできませんでした</div>
                @endif 
                
                    <div class="mb-1">
                        <label class="col-form-label col-form-label-lg required" style="font-size:2em;" for="last-name">Your Last Name</label>
                        <input id="last-name" class="col-12 form-control form-control-lg" type="text" name="name_last" placeholder="Daniel" required>
                    </div>
                    <div class="mb-1">
                        <label class="col-form-label col-form-label-lg required" style="font-size:2em;" for="first-name">Your first Name</label>
                        <input id="first-name" class="col-12 form-control form-control-lg" type="text" name="name_first" placeholder="Azul" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label required" for="wedding-code" style="font-size:2em;">Wedding Code</label>
                        <input id="wedding-code" class="form-control form-control-lg" type="password" name="wedding_code" placeholder="happy-weding123" required>
                    </div>
                    <div class="">
                        <input  class="btn btn-secondary form-control" type="submit" style="font-size:2em;" value="LOG IN">
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>