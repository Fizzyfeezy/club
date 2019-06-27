@extends('main')

@section('title', '| Homepage' )

@section('content')
s
    <div class = "row" style="margin-top: 70px;">
        <div class = "col-md-12">
            <div class="jumbotron">
                  <h1 class="display-4 font-weight-bold" style="color: #42383D;">CLUB SESSION REGISTRATION</h1>
                  <p class="lead">High school clubs and organizations, are student based school organizations, consisting of administration-approved organizations functioning with myriad tasks, varying on the specific purpose of each respective club</p>
                  <hr class="my-2">
                  <p>Clubs composed of students, with adults as advising figures to maintain the functionality of clubs. Clubs primarily focus on four aspects:</p>
                  <a class="btn  btn-lg" href="#" role="button" style="background-color: #DE2C85; color: white;">Read More</a>
            </div>
        <div>
    </div> <!-- end of header row -->

    <!-- Card Row 1 -->

    	<div style="display: flex; flex-direction: row; flex-wrap: wrap;justify-content: space-between;">
    		<div class="card" style="max-width: 13rem; border-color: #C7DEF2;">
    			<div class="text-center">
    				<img src="{{asset('image/science.png')}}" width= "50%" height="50%">
    				<div class="card-header" style="max-height: 2.5rem;"><h5>SCIENCE CLUB</h5></div>
    			</div>
    			<div class="card-body"  style="max-height: 14rem; background-color: #C7DEF2;" >
			    <h6 class="card-title" style="font-weight:400; text-align: center; font-size: 15px;  "> The Science Club is the place for students who are interested in science to learn about all scopes of science from medicine to chemistry to physics to the environment.</h6>
			    <div class="text-center">
			    	<a class="btn btn-dark btn-sm" href="{{ route('sciences.create') }}"  style="margin-top: 26px;">Register</a>
			    </div>
			  </div> 
			</div>

            <div class="card" style="max-width: 13rem; border-color: #EEBABA;">
                <div class="text-center">
                    <img src="{{asset('image/redcross.jpg')}}" width= "50%" height="50%">
                    <div class="card-header" style="max-height: 2.5rem;"><h5>RED CROSS</h5></div>
                </div>
              <div class="card-body" style="max-height: 14rem; background-color: #EEBABA;">
                <h6 class="card-title" style="font-weight:400; text-align: center; font-size: 15px;"> Red Cross Clubs empower you with knowledge and life-saving skills to help prepare your school and community to respond to emergencies.</h6>
                <div class="text-center">
                    <a class="btn btn-dark btn-sm" href="{{ route('redcrosses.create') }}" style="margin-top: 26px;">Register</a>
                </div>
              </div>
            </div>

            <div class="card" style="max-width: 13rem; border-color: #CBD1E8;">
                <div class="text-center">
                    <img src="{{asset('image/press.png')}}" width= "50%" height="50%">
                    <div class="card-header" style="max-height: 2.5rem;"><h5>PRESS CLUB</h5></div>
                </div>
                  <div class="card-body" style="max-height: 14rem; background-color: #CBD1E8;">
                    <h6 class="card-title" style="font-weight:400; text-align: center; font-size: 15px;">The Press Club is the world’s leading professional organization for journalists. It serves its members through activities that bolster their skills</h6>
                    <div class="text-center">
                        <a class="btn btn-dark btn-sm" href="{{ route('presses.create') }}" style="margin-top: 10px;">Register</a>
                    </div>   
                  </div>
            </div>

            <div class="card" style="max-width: 13rem; border-color: #ECDACA;">
                    <div class="text-center">
                        <img src="{{asset('image/brownie.jpeg')}}" width= "50%" height="50%">
                        <div class="card-header" style="max-height: 2.5rem;"><h5>BROWNIE</h5></div>
                    </div>
                    <div class="card-body" style="max-height: 14rem; background-color: #ECDACA;">
                        <h6 class="card-title" style="font-weight:400; text-align: center; font-size: 15px;">Brownies is about trying new things that teach girls about themselves, their community and introduces girls to a world of new opportunities, challenges and fun.</h6>
                        <div class="text-center" >
                            <a class="btn btn-dark btn-sm" href="{{ route('brownies.create') }}" style="margin-top: 10px;">Register</a>
                        </div>
                    </div>
            </div>

            <div class="card" style="max-width: 13rem; border-color: #EEBABA;">
                <div class="text-center">
                    <img src="{{asset('image/ict.jpg')}}" width= "50%" height="50%">
                    <div class="card-header" style="max-height: 2.5rem;"><h5>ICT CLUB</h5></div>
                </div>
              <div class="card-body" style="max-height: 14rem; background-color: #EEBABA;">
                <h6 class="card-title" style="font-weight:400; text-align: center; font-size: 15px;"> The club aims to improve the ICT skills of its members by nurturing their creative and programming skills, and sharpening their research and presentation skills.</h6>
                <div class="text-center">
                    <a class="btn btn-dark btn-sm" href="{{ route('icts.create') }}" style="margin-top: 10px;">Register</a>
                </div>
              </div>
            </div>
    	</div>

        <!-- Card Row 2 -->

        <div style="display: flex; flex-direction: row; flex-wrap: wrap; clear: both; margin-top: 30px; justify-content: space-between;">
            <div class="card" style="max-width: 13rem; border-color: #6C96CC;">
                <div class="text-center">
                    <img src="{{asset('image/Swimming.jpg')}}" width= "50%" height="50%">
                    <div class="card-header" style="max-height: 2.5rem;"><h5>SWIMMING CLUB</h5></div>
                </div>
                <div class="card-body"  style="max-height: 14rem; background-color: #6C96CC;" >
                <h6 class="card-title" style="font-weight:400; text-align: center; font-size: 15px;  ">Swimming is an individual or team sport that requires the use of one's entire body to move through water. The sport takes place in pools or open water.</h6>
                <div class="text-center">
                    <a class="btn btn-dark btn-sm" href="{{ route('swimmings.create') }}"  style="margin-top: 25px;">Register</a>
                </div>
              </div> 
            </div>

            <div class="card" style="max-width: 13rem; border-color: #F4F6F6;">
                <div class="text-center">
                    <img src="{{asset('image/chess.jpg')}}" width= "50%" height="50%">
                    <div class="card-header" style="max-height: 2.5rem;"><h5>CHESS CLUB</h5></div>
                </div>
              <div class="card-body" style="max-height: 14rem; background-color: #F4F6F6;">
                <h6 class="card-title" style="font-weight:400; text-align: center; font-size: 15px;">A chess club is a club formed for the purpose of playing the board game of chess.it provide for both informal and tournament games and sometimes offer league play.</h6>
                <div class="text-center">
                    <a class="btn btn-dark btn-sm" href="{{ route('chesses.create') }}" style="margin-top: 15px;">Register</a>
                </div>
              </div>
            </div>

            <div class="card" style="max-width: 13rem; border-color: #FAE5D3;">
                <div class="text-center">
                    <img src="{{asset('image/scrabble.jpg')}}" width= "50%" height="50%">
                    <div class="card-header" style="max-height: 2.5rem;"><h5>SCRABBLE CLUB</h5></div>
                </div>
                  <div class="card-body" style="max-height: 14rem; background-color: #FAE5D3;">
                    <h6 class="card-title" style="font-weight:400; text-align: center; font-size: 15px;">Scrabble is a word game in which two to four players score points by placing tiles bearing a single letter onto a board divided into a 15×15 grid of squares.</h6>
                    <div class="text-center">
                        <a class="btn btn-dark btn-sm" href="{{ route('scrabbles.create') }}" style="margin-top: 31px;">Register</a>
                    </div>   
                  </div>
            </div>

            <div class="card" style="max-width: 13rem; border-color: #D1F2EB;">
                    <div class="text-center">
                        <img src="{{asset('image/karate.jpg')}}" width= "50%" height="50%">
                        <div class="card-header" style="max-height: 2.5rem;"><h5>KARATE CLUB</h5></div>
                    </div>
                    <div class="card-body" style="max-height: 14rem; background-color: #D1F2EB;">
                        <h6 class="card-title" style="font-weight:400; text-align: center; font-size: 15px;">Karate is predominantly a striking art using punching, kicking, knee strikes, elbow strikes and open-hand techniques such as knife-hands, spear-hands etc.</h6>
                        <div class="text-center" >
                            <a class="btn btn-dark btn-sm" href="{{ route('karates.create') }}" style="margin-top: 31px;">Register</a>
                        </div>
                    </div>
            </div>

            <div class="card" style="max-width: 13rem; border-color: #F9EBEA;">
                <div class="text-center">
                    <img src="{{asset('image/ballet.jpg')}}" width= "50%" height="50%">
                    <div class="card-header" style="max-height: 2.5rem;"><h5>BALLET CLUB</h5></div>
                </div>
              <div class="card-body" style="max-height: 14rem; background-color: #F9EBEA;">
                <h6 class="card-title" style="font-weight:400; text-align: center; font-size: 15px;"> The Ballet Club offers students a foundation of life skills; physical health, intellectual stimulation, confidence, discipline, and fun!.</h6>
                <div class="text-center">
                    <a class="btn btn-dark btn-sm" href="{{ route('ballets.create') }}" style="margin-top: 50px;">Register</a>
                </div>
              </div>
            </div>
        </div>

        <!-- Card Row 3 -->

        <div style="display: flex; flex-direction: row; flex-wrap: wrap; clear: both; margin-top: 30px; justify-content: space-between;">
            <div class="card" style="max-width: 13rem; border-color: #D6EAF8;">
                <div class="text-center">
                    <img src="{{asset('image/music.jpg')}}" width= "50%" height="50%">
                    <div class="card-header" style="max-height: 2.5rem;"><h5>MUSIC CLUB</h5></div>
                </div>
                <div class="card-body"  style="max-height: 14rem; background-color: #D6EAF8;" >
                <h6 class="card-title" style="font-weight:400; text-align: center; font-size: 15px;  ">This club strives to promote all student participation in the contribution and enjoyment of their musical abilities/talents and to provide an outlet for all students.</h6>
                <div class="text-center">
                    <a class="btn btn-dark btn-sm" href="{{ route('musics.create') }}"  style="margin-top: 8px;">Register</a>
                </div>
              </div> 
            </div>

            <div class="card" style="max-width: 13rem; border-color: #E8DAEF;">
                <div class="text-center">
                    <img src="{{asset('image/french.png')}}" width= "50%" height="50%">
                    <div class="card-header" style="max-height: 2.5rem;"><h5>FRENCH CLUB</h5></div>
                </div>
              <div class="card-body" style="max-height: 14rem; background-color: #E8DAEF;">
                <h6 class="card-title" style="font-weight:400; text-align: center; font-size: 15px;">The French Club is a social club focused on French culture and language for students of all levels. If you are interested in sharing and exploring your passion for the French culture</h6>
                <div class="text-center">
                    <a class="btn btn-dark btn-sm" href="{{ route('frenches.create') }}" style="margin-top: 8px;">Register</a>
                </div>
              </div>
            </div>

            <div class="card" style="max-width: 13rem; border-color: #FEF9E7;">
                <div class="text-center">
                    <img src="{{asset('image/road.jpg')}}" width= "50%" height="50%">
                    <div class="card-header" style="max-height: 2.5rem;"><h5>ROAD SAFETY</h5></div>
                </div>
                  <div class="card-body" style="max-height: 14rem; background-color: #FEF9E7;">
                    <h6 class="card-title" style="font-weight:400; text-align: center; font-size: 15px;">The Road Safety Club (RSC) is an arm of the Federal Road Safety Commission which derives its functional powers with the following responsibilities among others. </h6>
                    <div class="text-center">
                        <a class="btn btn-dark btn-sm" href="{{ route('roads.create') }}" style="margin-top: 9px;">Register</a>
                    </div>   
                  </div>
            </div>

            <div class="card" style="max-width: 13rem; border-color: #D5D8DC;">
                    <div class="text-center">
                        <img src="{{asset('image/table.jpg')}}" width= "50%" height="50%">
                        <div class="card-header" style="max-height: 2.5rem;"><h5>TABLE TENNIS</h5></div>
                    </div>
                    <div class="card-body" style="max-height: 14rem; background-color: #D5D8DC;">
                        <h6 class="card-title" style="font-weight:400; text-align: center; font-size: 15px;">This program is designed for both students who want to have fun with table-tennis while still learning and students who want to compete at a national level.</h6>
                        <div class="text-center" >
                            <a class="btn btn-dark btn-sm" href="{{ route('tables.create') }}" style="margin-top: 10px;">Register</a>
                        </div>
                    </div>
            </div>

            <div class="card" style="max-width: 13rem; border-color: #B4CFF2;">
                <div class="text-center">
                    <img src="{{asset('image/basket.jpg')}}" width= "50%" height="50%">
                    <div class="card-header" style="max-height: 2.5rem;"><h5>BASKET BALL</h5></div>
                </div>
              <div class="card-body" style="max-height: 14rem; background-color: #B4CFF2;">
                <h6 class="card-title" style="font-weight:400; text-align: center; font-size: 15px;">Basketball is a team sport in which two teams, most commonly of five players each, opposing one another on a rectangular court.</h6>
                <div class="text-center">
                    <a class="btn btn-dark btn-sm" href="{{ route('baskets.create') }}" style="margin-top: 44px;">Register</a>
                </div>
              </div>
            </div>
        </div>



@endsection
