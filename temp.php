        $testOrder= Orders::first();
        //var_dump($testOrder);
        //var_dump(Carbon::now());
        $today = Carbon::now()->toDateString();
        //var_dump($today);
        $orders= Orders::whereDate('created_at','=',$today)->get();
        //var_dump(count($orders));
        //$users = DB::table('users')
                //->whereDate('created_at', '2016-12-31')
                //->get();
        //$orders= Orders::where(DB::raw('MONTH(created_at)'), '=', date('n')
        foreach ($orders as $order) {
            //var_dump($order->id);
            //var_dump(count((array)$order->id));
        }
        //return($artistsPictureCount);

        //$interval = new DateInterval('P1D');
        //$daterange = new DatePeriod($from, $interval ,$to);
        
        //foreach($daterange as $date){
            //echo $date->format("Ymd"), PHP_EOL;
        //}
    $start_date = Carbon::createFromFormat('Y-m-d', '2018-05-21');
    $end_date=Carbon::now();
    for($date = $start_date; $date->lte($end_date); $date->addDay()) {
        $datesString[] = $date->toDateString();
    }
        //var_dump($datesString);
    }

                            <input type="hidden" name="x1" value="" />
                            <input type="hidden" name="y1" value="" />
                            <input type="hidden" name="w" value="" />
                            <input type="hidden" name="h" value="" />
placeholder="Please enter your full name *" 
