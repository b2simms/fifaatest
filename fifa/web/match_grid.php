

    <?php

            include_once '../matches.php';

            $game = new Matches();

             $gameAll = json_decode( $game->getMatches() );

             $games = $gameAll->matches;
             
        ?>              
                    

                    <?php foreach($games as $row): ?>   
                            

                    
                      <div class="row">

                        <div class="col s3">
                          

                            <div class="team1_image">
                              
                            </div>

                          
                          
                        </div>  

                        <div class="col s6">
                            <div class="row">
                              <div class="col s4">
                                
                                  <span class="locationText">
                                    <?= $row->tierBig?> . <?= $row->tierMed ?> . <?= $row->tierSm ?>
                                    <br/>
                                    <?= $row->date ?>
                                  </span>
                                
                              </div>
                              <div class="col s4">  
                                
                                  <span class="scoreText">
                                    <?= $row->team1_p1_goal + $row->team1_p2_goal ?> 
                                    - 
                                    <?= $row->team2_p1_goal + $row->team2_p2_goal ?>
                                  </span>
                               
                              </div> 
                              <div class="col s4"> 
                                  <div class="row">
                                    <div class="col s4 day">
                                        <?= $row->team1_p1 ?>, <?= $row->team1_p2 ?>,
                                    </div>
                                    <div class="col s8 date">
                                        <?= $row->team2_p1 ?>, <?= $row->team2_p2 ?>,
                                    </div>
                                  </div>
                              </div>  
                            </div>  
                          
                        </div>  

                        <div class="col s3">
                          
                            <div class="team2_image">
                              
                            </div>

                            
                          
                        </div>

                      </div>
                     

                    <br />             

                <?php endforeach; ?><?php echo ob_get_clean(); ?>
