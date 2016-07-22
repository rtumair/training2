{include file="./header.tpl" }

<div id="page-wrapper">
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add User
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action="/my_work/mvc/public/admin/insert">

                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" placeholder="Enter name" name="name">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" placeholder="Enter password" name="pswd">
                            </div>

                            <button type="submit" class="btn btn-default">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

{include file="./footer.tpl" }