<?php
                        echo "<div style='text-align:center'>";

                        if(isset($_COOKIE['visited_services'])) {
                           $visited_services = $_COOKIE['visited_services'];
                           $visited_services = unserialize($visited_services);
                           foreach($visited_services as $service_url) {
                            
                            
                              $service = substr($service_url, 0, -4);
                              echo " <table>
                                <tr>
                                    <td><a href='$service_url' style='color:red'>$service</a></td>
                                </tr>
                            </table>";
                            }
                        }
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='text-center px-16'>";
                        echo"<p class='text-white text-xl'>Most Visited Products:-</p>";
                        if (isset($_COOKIE['visit_count'])) {
                            $visit_count = $_COOKIE['visit_count'];
                            $visit_count = unserialize($visit_count);
                            foreach ($visit_count as $service_url => $count) {
                                echo "
                                <table>
                                    <tr>
                                        <td><a href='$service_url.php' style='color:red'>$service_url-$count times</a></td>
                                    </tr>
                                </table>";
                            }
                        }
                        echo "</div>";
                        asort($visit_count);
                        $visit_count = array_reverse($visit_count);
                        $top5 = array_slice($visit_count, 0, 5);
                        echo "<div class='text-center px-16'>";
                        echo"<p class='text-white text-xl'>Top 5 Most Visited Products:-</p>";
                        foreach ($top5 as $service_url => $count) {
                            echo "
                            <table>
                                <tr>
                                    <td><a href='$service_url.php' style='color:red'>$service_url-$count times</a></td>
                                </tr>
                            </table>";
                        }
                        echo "</div>";
                        ?>