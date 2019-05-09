 <div class="col-md-8 nav-mind">
                            <!-- block search -->
                            <div class="block-search">
                                <div class="block-content">
                                    <div class="categori-search  ">
                                        <form method="GET" >

                                        <select data-placeholder="All Categories" class="chosen-select categori-search-option">
                                            <option value="">All Categories</option>
                                           @foreach($categories as $category)
                                          
                                              <option>{{ $category->name }}</option>
                                             
                                           @endforeach
                                           
                                        </select>
                                    </div>
                                    <div class="form-search">
                                        <form method="GET" action="{{ route('search') }}">
                                            <div class="box-group">
                                                <input type="text" name="query" class="form-control" placeholder="Searh entire store here...">
                                                <button class="btn btn-search" type="submit"><span>search</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- block search -->
                        </div>