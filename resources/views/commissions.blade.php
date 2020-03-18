@extends('layouts.app')

@section('content')
    <div class="container card">
        <h2 class="centeredTxt">Commissions and Referrals</h2>
        <div class = "row">
            <div class = "col-md-5">
                <p>
                    If you’ve been reading the information on this website, by now you will know the many benefits in joining and supporting BTR.
                    But what’s in it for you? BTR is a grooming ladder, a learning tool. A chance to compete and challenge yourself.
                    But, what you probably don’t know is that you can earn commissions by just referring your friends.
                </p>
                <p>
                    If you refer a friend to join as a BTR member, give them your member ID # and ask them to put it in the “Referring Member ID” when they register.
                    Why? Because when your friend joins BTR you will earn $0.50 every time your friend plays a match.
                    Doesn’t sound like much, but get enough friends to join and the next thing you know you’ll be making enough commissions to swing at the cash for free.
                    Maybe even twice a week.
                </p>
                <p>
                    If you’re building a team for the 3, 4 or 5 player team event, be sure to give them your member ID so they can return the favor to you.
                    It’s our way of saying thank you for your support.
                </p>
            </div>
            <div class = "col-md-7">
                <img src = "{{asset('imgs/commissions.png')}}"  style = "float:right;" alt = "Commissions">
            </div>
        </div>
    </div>

@endsection