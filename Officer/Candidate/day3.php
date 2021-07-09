<?php include "header.php"; ?>
<?php $t = 50; ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(){
        $("select").change(function(){
            $(this).find("option:selected").each(function(){
                var optionValue = $(this).attr("value");
                if(optionValue){
                    $(".box").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else{
                    $(".box").hide();
                }
            });
        }).change();
    });
</script>
<div class="container-login">
    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card shadow-sm my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-form">
                                <div class="text-left">
                                    <h1 class="h4 text-gray-900 mb-4">Test Mark sheet</h1>
                                </div>
                                <div class="text-left" style="width: 300px;">
                                    <select class="form-control">
                                        <option>Select Test</option>
                                        <option value="thematic-apperception-test">Thematic Apperception Test (TAT)</option>
                                        <option value="word-association-test">Word Association Test (WAT)</option>
                                        <option value="situation-reaction-test">Situation Reaction Test (SRT)</option>
                                        <option value="self-description-test">Self Description Test (SDT)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="thematic-apperception-test box container-login">
                        <div class="row justify-content-center">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card shadow-sm my-5">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="login-form">
                                                    <div class="text-center">
                                                        <h1 class="h4 text-gray-900 mb-4">Thematic Apperception Test (TAT)</h1>
                                                    </div>
                                                    <form>
                                                        <table class="table align-items-center table-flush" id="dataTable">
                                                            <thead class="thead-light text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </thead>
                                                            <tfoot class="text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </tfoot>
                                                            <tbody>
                                                            <tr><td>1</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>2</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?> </td>
                                                            </tr>
                                                            <tr><td>3</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"> <?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>4</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"> <?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>5</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"> <?php echo $t; ?> </td>
                                                            </tr>
                                                            <tr><td>6</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"> <?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>7</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"> <?php echo $t; ?> </td>
                                                            </tr>
                                                            <tr><td>8</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>9</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>10</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>11</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>12</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>13</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>14</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>15</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>16</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>17</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>18</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>19</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>20</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>21</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>22</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>23</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>24</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>25</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>26</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>27</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>28</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>29</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>30</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                    <hr>
                                                    <div class="text-center">
                                                        <button class="btn btn-info" name="submit1"  style="width: 300px;"><i class="fas fa-check-circle"></i> Add </button>
                                                    </div>
                                                    <div class="text-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="word-association-test box container-login">
                        <div class="row justify-content-center">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card shadow-sm my-5">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="login-form">
                                                    <div class="text-center">
                                                        <h1 class="h4 text-gray-900 mb-4">Word Association Test (WAT)</h1>
                                                    </div>
                                                    <form>
                                                        <table class="table align-items-center table-flush" id="dataTable">
                                                            <thead class="thead-light text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </thead>
                                                            <tfoot class="text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </tfoot>
                                                            <tbody>
                                                            <tr><td>1</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>2</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>3</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>4</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>5</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>6</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>7</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>8</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>9</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>10</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>11</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>12</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>13</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>14</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>15</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>16</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>17</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>18</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>19</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>20</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>21</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>22</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>23</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>24</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>25</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>26</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>27</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>28</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>29</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>30</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                    <hr>
                                                    <div class="text-center">
                                                        <button class="btn btn-info" name="submit1"  style="width: 300px;"><i class="fas fa-check-circle"></i> Add </button>
                                                    </div>
                                                    <div class="text-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="situation-reaction-test box container-login">
                        <div class="row justify-content-center">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card shadow-sm my-5">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="login-form">
                                                    <div class="text-center">
                                                        <h1 class="h4 text-gray-900 mb-4">Situation Reaction Test (SRT)</h1>
                                                    </div>
                                                    <form>
                                                        <table class="table align-items-center table-flush" id="dataTable">
                                                            <thead class="thead-light text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </thead>
                                                            <tfoot class="text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </tfoot>
                                                            <tbody>
                                                            <tr><td>1</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>2</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>3</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>4</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>5</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>6</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>7</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>8</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>9</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>10</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>11</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>12</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>13</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>14</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>15</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>16</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>17</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>18</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>19</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>20</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>21</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>22</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>23</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>24</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>25</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>26</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>27</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>28</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>29</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>30</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                    <hr>
                                                    <div class="text-center">
                                                        <button class="btn btn-info" name="submit1"  style="width: 300px;"><i class="fas fa-check-circle"></i> Add </button>
                                                    </div>
                                                    <div class="text-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="self-description-test box container-login">
                        <div class="row justify-content-center">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card shadow-sm my-5">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="login-form">
                                                    <div class="text-center">
                                                        <h1 class="h4 text-gray-900 mb-4">Self Description Test (SDT)</h1>
                                                    </div>
                                                    <form>
                                                        <table class="table align-items-center table-flush" id="dataTable">
                                                            <thead class="thead-light text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </thead>
                                                            <tfoot class="text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </tfoot>
                                                            <tbody>
                                                            <tr><td>1</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>2</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>3</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>4</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>5</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>6</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>7</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>8</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>9</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>10</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>11</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>12</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>13</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>14</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>15</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>16</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>17</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>18</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>19</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>20</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>21</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>22</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>23</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>24</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>25</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>26</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>27</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>28</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>29</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>30</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                    <hr>
                                                    <div class="text-center">
                                                        <button class="btn btn-info" name="submit1"  style="width: 300px;"><i class="fas fa-check-circle"></i> Add </button>
                                                    </div>
                                                    <div class="text-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>


