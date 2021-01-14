<nav class="active" id="sidebar">
    <ul class="list-unstyled lead">
            <li class="active">
                <a href="{{ route('home') }}"><i class="fa fa-home fa-lg"></i>Home</a>
            </li>
            <li>
                <a href="{{ route('orders.index') }}"><i class="fas fa-box fa-lg"></i>Orders</a>
            </li>
            <li>
                <a href="{{ route('transactions.index') }}"><i class="fas fa-money-bill-wave fa-lg"></i>Transactions</a>
            </li>
            <li>
                <a href="{{ route('products.index') }}"><i class="fab fa-product-hunt fa-lg"></i>Products</a>
            </li>
    </ul>
</nav>

<style>
    #sidebar ul.lead{
        border-bottom: 1px solid  #0072B5;
        width: fit-content;
    }
    #sidebar ul li a{
        padding: 10px;
        font-size: 1.1em;
        display: block;
        width: 30vh;
        color:  #0072B5;
    }
    #sidebar ul li a:hover{
        color: #fff;
        background-color: #0072B5;
        text-decoration: none !important;
    }
    #sidebar ul li a i{
        margin-right: 10px;
    }
    #sidebar ul li.active>a, a[aria-expanded="true"]{
        color: #fff;
        background-color:  #0072B5;
    }
</style>
