@include('template.header')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- Sales information -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Sales overview <a href="/record/add"><i class="fa fa-plus-circle text-info"></i></a></h5>
                    <div class="row">
                        <div class="col-6">
                            <div class="card p-2 m-1">
                                <h6 class="card-text">Sales Today</h6>
                                <h6 class="card-text custom-number-font">
                                    <?= $sales_today ?>
                                </h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card p-2 m-1">
                                <h6 class="card-text">Monthly Sales</h6>
                                <h6 class="card-text custom-number-font">
                                    <?= $sales_month ?>
                                </h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card p-2 m-1">
                                <h6 class="card-text">Clients</h6>
                                <h6 class="card-text custom-number-font">
                                    <?= $total_client_tattoo ?> |
                                    <?= $total_client_piercing ?> =
                                    <?= $total_clients ?>
                                </h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card p-2 m-1">
                                <h6 class="card-text">Profit</h6>
                                <h6 class="card-text custom-number-font">
                                    <?= $sales_month - 15000 ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Inventory -->
            <div class="card mt-1">
                <div class="card-body">
                    <h5 class="card-title">Inventory overview <a href="/expenses/add"><i class="fa fa-plus-circle text-info"></i></a></h5>
                    <div class="row">
                        <div class="col-6">
                            <div class="card p-2 m-1">
                                <h6 class="card-text">Low Supplies</h6>
                                <h6 class="card-text custom-number-font">3 items</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card p-2 m-1">
                                <h6 class="card-text">Expenses</h6>
                                <h6 class="card-text custom-number-font">20,000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






















@include('template.footer')