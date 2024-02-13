
@include('partials.__docStart')
    <main class="container vh-100 py-5" >

        <a href="/add-customers">add customers</a>


        <div>
            <h1>list of customers</h1>
            <table>
                <thead>
                    <tr>
                        <th>name</th>
                        <th>age</th>
                        <th>email</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $customers as $customer )
                    <tr>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->age }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>
                            <a href="/edit-customers/{{$customer->id}}">edit</a>
                            <a href="/delete-customers/{{$customer->id}}">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>



    </main>
@include('partials.__docEnd')
