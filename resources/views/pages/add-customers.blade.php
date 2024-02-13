
@include('partials.__docStart')
    <main class="container vh-100 py-5" >

        @if(session('success'))
        <div>
        {{ session('success') }}
        </div>
        @endif


        <form action="add" method="post">

            @csrf

            <div>
                <label for="">name</label>
                <input type="text" placeholder="Name" name="name" >
            </div>

            <div>
                <label for="">age</label>
                <input type="text" placeholder="Age" name="age">
            </div>

            <div>
                <label for="">email</label>
                <input type="email" placeholder="Email" name="email" >
            </div>

            <button>Add Customer</button>

        </form>

    </main>
@include('partials.__docEnd')
