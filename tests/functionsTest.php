<?php 



class ClassificationTest extends \PHPUnit\Framework\TestCase{


    public function testProxyTotal()
        {

            $URL = 'http://proxy.40103299.qpc.hal.davecutting.uk/?input_text=Cloud%20Computing,88newlineProgramming,55newlineDatabases,72newlineSoftware%20Engineering,85newlineComputing%20Foundations,69newlineUX%20Design,86&service=total';
            $result = file_get_contents($URL);
            $expected = '{"answer":455,"error":"false","string":""}';
            $similarity = similar_text($expected,$result, $percentage);
            if($percentage > 98){
                $bool = true;
            }else{
                $bool = false;
            }
            $this->assertEquals(true,$bool);
        }

        public function testProxyClassify()
        {

            $URL = 'http://proxy.40103299.qpc.hal.davecutting.uk/?input_text=Cloud%20Computing,88newlineProgramming,55newlineDatabases,72newlineSoftware%20Engineering,85newlineComputing%20Foundations,69newlineUX%20Design,86&service=classify';
            $result = file_get_contents($URL);
            $expected = '{"error":false,"string":"Cloud Computing,88newlineProgramming,55newlineDatabases,72newlineSoftware Engineering,85newlineComputing Foundations,69newlineUX Design,86=Distinction","answer":"Distinction"}';
            $similarity = similar_text($expected,$result, $percentage);
            if($percentage > 98){
                $bool = true;
            }else{
                $bool = false;
            }
            $this->assertEquals(true,$bool);
        }


        public function testProxyMaxMin()
        {

            $URL = 'http://proxy.40103299.qpc.hal.davecutting.uk/?input_text=Cloud%20Computing,88newlineProgramming,55newlineDatabases,72newlineSoftware%20Engineering,85newlineComputing%20Foundations,69newlineUX%20Design,86&service=maxmin';
            $result = file_get_contents($URL);
            $expected = '{"error":false,"string":"Cloud Computing,88newlineProgramming,55newlineDatabases,72newlineSoftware Engineering,85newlineComputing Foundations,69newlineUX Design,86=Cloud Computing, 88newlineProgramming, 55","answer":"Cloud Computing, 88newlineProgramming, 55"}';
            $similarity = similar_text($expected,$result, $percentage);
            if($percentage > 98){
                $bool = true;
            }else{
                $bool = false;
            }
            $this->assertEquals(true,$bool);
        }

        public function testProxySort()
        {

            $URL = 'http://proxy.40103299.qpc.hal.davecutting.uk/?input_text=Cloud%20Computing,88newlineProgramming,55newlineDatabases,72newlineSoftware%20Engineering,85newlineComputing%20Foundations,69newlineUX%20Design,86&service=sort';
            $result = file_get_contents($URL);
            $expected = '{"error":false,"string":"Cloud Computing,88newlineProgramming,55newlineDatabases,72newlineSoftware Engineering,85newlineComputing Foundations,69newlineUX Design,86=Cloud Computing, 88newlineUX Design, 86newlineSoftware Engineering, 85newlineDatabases, 72newlineComputing Foundations, 69newlineProgramming, 55newline","answer":"Cloud Computing, 88newlineUX Design, 86newlineSoftware Engineering, 85newlineDatabases, 72newlineComputing Foundations, 69newlineProgramming, 55newline"}';
            $similarity = similar_text($expected,$result, $percentage);
            if($percentage > 98){
                $bool = true;
            }else{
                $bool = false;
            }
            $this->assertEquals(true,$bool);
        }








        /*

        $out = new \App\functions;

        $inputText = 'software engineering,99newlinedatabases,55newlineweb development,10newlinecomputing foundations,10newlinecloud computing,1';
        $result = $out->getMaxMin($inputText);

        $this->assertEquals('software engineering, 99newlinecloud computing, 1',$result);


}

        public function testgetMaxMinDoesSomething()
        {
            $out = new \App\functions;
            $inputText = 'software engineering,99newlinedatabases,55newlineweb development,10newlinecomputing foundations,10newlinecloud computing,1';
            $result = $out->getMaxMin($inputText);
            $this->assertNotEquals($inputText,$result);
        }

        public function testgetMaxMinIncompleteInputs()
        {

            $out = new \App\functions;

            $inputText = 'software engineering,99';
            $result = $out->getMaxMin($inputText);

            $this->assertEquals('software engineering, 99newlinesoftware engineering, 99',$result);


        }

        public function testService()
        {

            $out = new \App\functions;

            $URL = 'http://maxmin-40103299.40103299.qpc.hal.davecutting.uk/?input_text=softwareengineering,99newlinedatabases,55newlinewebdevelopment,10newlinecomputingfoundations,10newlinecloudcomputing,1';


            $result = file_get_contents($URL);

            $this->assertEquals('{"error":false,"string":"softwareengineering,99newlinedatabases,55newlinewebdevelopment,10newlinecomputingfoundations,10newlinecloudcomputing,1=softwareengineering, 99newlinecloudcomputing, 1","answer":"softwareengineering, 99newlinecloudcomputing, 1"}',$result);


        }
*/
}?>