
@include('partials.__docStart')
    <main class="container vh-100 py-5" >

        @if(session('success'))
        <div>
        {{ session('success') }}
        </div>
        @endif


        <div class="mb-5" >
            <h6>current data</h6>
            <label>name: {{ $customer->name }}</label><br/>
            <label>age: {{ $customer->age }}</label><br/>
            <label>email: {{ $customer->email }}</label>
        </div>

        <form action="/update-customer/{{$customer->id}}" method="post">

            @csrf

            <input type="text" value="{{$customer->id}}" readonly  hidden >

            <div>
                <label for="">name</label>
                <input type="text"  name="name" >
            </div>

            <div>
                <label for="">age</label>
                <input type="text"  name="age">
            </div>

            <div>
                <label for="">email</label>
                <input type="email" name="email" >
            </div>

            <button>update</button>

        </form>

    </main>
@include('partials.__docEnd')
