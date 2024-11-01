<?php
//
/*-  Outputs the main calculator   -*/
//
function inc_sipc_calculator(){

$output='<div id="sipc_main-calculator">

            <h4>Due Date Calculator</h4>
            <p>Please select the first day of you last period</p>

                <p><input type="text" placeholder="Select date:" id="sipc_datepicker" class="datepicker"></p>
                <p>You last period date: <span id="sipc_selectedDate"></span> </p>

                <div id="sipc_res-card"class="animated material-card sipc_card">

                    <div class="sipc_card-content" style="background-image:url(';
                    $output.=plugins_url( 'img/pregnancy1.png',dirname(__FILE__) );
                    $output.=')">

                   <p id="sipc_res-day"></p>
                   <h2 id="sipc_month-short"></h2>
                   <p id="sipc_res-year"></p>
                   </div>

                   <div class="sipc_card-footer">
                   <span id="sipc_result" >Please select a date </span>
                   </div>

                </div>


            </div>';
return $output;

 }


function inc_sipc_widget_calculator(){

$output='<div id="sipc_widget-calculator">
            <h4>Due Date Calculator</h4>
                        <p>Please select the first day of you last period</p>

                            <p><input type="text" placeholder="Select date:" id="sipc_widget-datepicker" class="datepicker"></p>
                            <p>You last period date: <span id="sipc_widgetSelectedDate"></span> </p>

                            <div id="sipc_widget-res-card" class="animated material-card sipc_card">

                                <div class="sipc_card-content" style="background-image:url(';
                                $output.=plugins_url( 'img/pregnancy1.png',dirname(__FILE__) );
                                $output.=')">

                               <p id="sipc_widget-res-day"></p>
                               <h2 id="sipc_widget-month-short"></h2>
                               <p id="sipc_widget-res-year"></p>
                               </div>

                               <div class="sipc_card-footer">
                               <strong><span id="sipc_widget-result">Please select a date </span>
                               </div>

                            </div>

            </div>';

return $output;

 }


 ?>