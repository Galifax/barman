<?php foreach($model as $cat):?>
                       <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header"><?= $cat->name?></li>
                                    <?php foreach($cat->category as $category):?>
                                    <li><a href="#"><?= $category->name?></a></li>
                                    <?php endforeach;?>
                                    
                                </ul>
                            </li>
                        <?php endforeach;?>