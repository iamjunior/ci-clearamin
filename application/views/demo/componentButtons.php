<style>.demo-btn .btn{margin:5px}</style>
            <div class="container-fluid">
                <div class="row cm-fix-height">
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">Button colors</div>
                            <div class="panel-body demo-btn">
                                <button type="button" class="btn btn-default">Default</button>
                                <button type="button" class="btn btn-primary">Primary</button>
                                <button type="button" class="btn btn-success">Success</button>
                                <button type="button" class="btn btn-info">Info</button>
                                <button type="button" class="btn btn-warning">Warning</button>
                                <button type="button" class="btn btn-danger">Danger</button>
                                <button type="button" class="btn btn-gray">Gray</button>
                                <button type="button" class="btn btn-yellow">Yellow</button>
                                <button type="button" class="btn btn-purple">Purple</button>
                                <button type="button" class="btn btn-turquoise">Turquoise</button>
                                <button type="button" class="btn btn-midnight">Midnight</button>
                                <button type="button" class="btn btn-link">Link</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">Button sizes</div>
                            <div class="panel-body demo-btn">
                                <p>
                                    <button type="button" class="btn btn-primary btn-lg">Large button</button>
                                    <button type="button" class="btn btn-default btn-lg">Large button</button>
                                </p>
                                <p>
                                    <button type="button" class="btn btn-primary">Default button</button>
                                    <button type="button" class="btn btn-default">Default button</button>
                                </p>
                                <p style="margin-bottom:0">
                                    <button type="button" class="btn btn-primary btn-sm">Small button</button>
                                    <button type="button" class="btn btn-primary btn-xs">Extra small button</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row cm-fix-height">
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">Button / input groups</div>
                            <div class="panel-body">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default"><i class="fa fa-fw fa-cut"></i></button>
                                    <button type="button" class="btn btn-default"><i class="fa fa-fw fa-copy"></i></button>
                                    <button type="button" class="btn btn-default"><i class="fa fa-fw fa-clipboard"></i></button>
                                    <button type="button" class="btn btn-default"><i class="fa fa-fw fa-save"></i></button>
                                </div>
                                <br>
                                <br>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-turquoise">Left</button>
                                    <button type="button" class="btn btn-turquoise">Middle</button>
                                    <button type="button" class="btn btn-turquoise">Right</button>
                                </div>
                                <br>
                                <br>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                </div>
                                <br>
                                <div class="input-group input-group-lg">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button style="z-index:2" class="btn btn-primary md-search-white" type="button">&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">Pagination</div>
                            <div class="panel-body" style="margin-bottom:-54px">
                                <nav>
                                    <ul class="pagination">
                                        <li>
                                            <a href="#">
                                                <span><i class="fa fa-angle-left"></i></span>
                                            </a>
                                        </li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                            <a href="#">
                                                <span><i class="fa fa-angle-right"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <p>Use of <code>.shadowed</code> class outside the panel</p>
                            </div>
                        </div>
                        <nav>
                            <ul class="pagination shadowed" style="margin:0">
                                <li>
                                    <a href="#">
                                        <span><i class="fa fa-angle-left"></i></span>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#">
                                        <span><i class="fa fa-angle-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="row cm-fix-height">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">Login Form (responsive)</div>
                            <div class="panel-body">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    Remember me 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom:0">
                                        <div class="col-sm-offset-2 col-sm-10 text-right">
                                            <button type="reset" class="btn btn-default">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Sign in</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <!-- Default panel contents -->
                            <div class="panel-heading">Checkboxes &amp; Radios</div>
                            <div class="panel-body">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        Option one is this and that&mdash;be sure to include why it's great 
                                    </label>
                                </div>
                                <div class="checkbox disabled">
                                    <label>
                                        <input type="checkbox" value="" disabled>
                                        Option two is disabled 
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                        Option one is this and that&mdash;be sure to include why it's great 
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                        Option two can be something else and selecting it will deselect option one 
                                    </label>
                                </div>
                                <div class="radio disabled">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                                        Option three is disabled 
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>