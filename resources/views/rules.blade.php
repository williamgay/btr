@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="centeredTxt">
                    BTR Game Rules & Guidelines
                </h2>
                <p>Where Real Players Play and Others Cry</p>
                <hr>
            </div>
        </div>
        <!-- Links to anchors in page -->
        <div class="row" style="background-image: url('imgs/background1.png');">
            <div class="col-md-3">
                <p><a href="#_Toc17793125">1. Ghost. 5</a></p>

                <p><a href="#_Toc17793126">1.1 Part of the Table. 5</a></p>

                <p><a href="#_Toc17793127">2. Terminology. 6</a></p>

                <p><a href="#_Toc17793128">3 Playing the Ghost General Rules.
                        7</a></p>

                <p><a href="#_Toc17793129">3.1 Player's Responsibility. 7</a></p>

                <p><a href="#_Toc17793130">3.2 Player's Use of Equipment. 7</a></p>

                <p><a href="#_Toc17793131">3.3 Technical Requirements for A Valid Match. 8</a></p>

                <p><a href="#_Toc17793132">Membership Types. 8</a></p>

                <p><a href="#_Toc17793133">3.3 Multi-Player Order of Play. 9</a></p>

                <p><a href="#_Toc17793134">3.4 Spotting Balls. 9</a></p>

                <p><a href="#_Toc17793135">3.5 Ball-in-Hand (BIH) Rules. 9</a></p>

                <p><a href="#_Toc17793136">3.6 Call Shot Rules. 9</a></p>

                <p><a href="#_Toc17793137">3.7 Conclusion of Game. 10</a></p>

                <p><a href="#_Toc17793138">3.8 All-Ball-Foul Rules. 10</a></p>

                <p><a href="#_Toc17793139">3.9 Fouls On the Break. 10</a></p>

                <p><a href="#_Toc17793140">3.10 General Fouls During Play. 11</a></p>

                <p><a href="#_Toc17793141">3.11 Removing a Film Rack After the Break. 11</a></p>

                <p><a href="#_Toc17793142">3.13 Cut and Snap Game Defined. 12</a></p>

                <p><a href="#_Toc17793143">4 Play 220 vs the Ghost Rules. 12</a></p>

                <p><a href="#_Toc17793144">4.1 Racking. 12</a></p>

                <p><a href="#_Toc17793145">4.2 Ball Contact. 13</a></p>

                <p><a href="#_Toc17793146">4.3 Legally Pocketing Balls Out of Order. 13</a></p>

                <p><a href="#_Toc17793147">4.4 Call Shot Rules. 13</a></p>

                <p><a href="#_Toc17793148">4.5 10 Ball On the Break. 13</a></p>

                <p><a href="#_Toc17793149">4.6 Early 10ball 13</a></p>

                <p><a href="#_Toc17793150">3.7 Snap Game Defined. 13</a></p>

                <p><a href="#_Toc17793151">4.8 Cut Game Defined. 13</a></p>

                <p><a href="#_Toc17793152">4.9 Cut Option Executed Defined. 13</a></p>

                <p><a href="#_Toc17793153">4.10 Bonus Points 11th Game. 14</a></p>

                <p><a href="#_Toc17793154">4.11 A Perfect 220 Game. 14</a></p>

                <p><a href="#_Toc17793155">4.12 Special Racking Situations. 14</a></p>

                <p><a href="#_Toc17793156">4.13 Slow Play. 14</a></p>

            </div>
            <div class="col-md-3">

                <p><a href="#_Toc17793157">4.14 Scoring. 14</a></p>

                <p><a href="#_Toc17793158">5. Playing 198 (9-ball vs. the Ghost) (rules for intermediate, open,
                        advanced &amp; semi-pro divisions). 19</a></p>

                <p><a href="#_Toc17793159">5.1 Match Rules. 19</a></p>

                <p><a href="#_Toc17793160">5.1 Table Criteria and Racking. 19</a></p>

                <p><a href="#_Toc17793161">5.2 Ball Contact. 20</a></p>

                <p><a href="#_Toc17793162">5.3 Legally Pocketing Balls Out of Order. 20</a></p>

                <p><a href="#_Toc17793163">5.4 Call Shot Rules. 20</a></p>

                <p><a href="#_Toc17793164">5.5 9 Ball On the Break. 20</a></p>

                <p><a href="#_Toc17793165">5.6 Early 9ball 20</a></p>

                <p><a href="#_Toc17793166">5.7 Snap Game Defined. 20</a></p>

                <p><a href="#_Toc17793167">5.8 Cut Game Defined. 20</a></p>

                <p><a href="#_Toc17793168">5.9 Cut Option Executed Defined. 21</a></p>

                <p><a href="#_Toc17793169">5.10 Bonus Points 11th Game. 21</a></p>

                <p><a href="#_Toc17793170">5.11 A Perfect 198 Game. 21</a></p>

                <p><a href="#_Toc17793171">5.12 Special Racking Situations. 21</a></p>

                <p><a href="#_Toc17793172">5.13 Slow Play. 22</a></p>

                <p><a href="#_Toc17793173">5.14 Scoring. 22</a></p>

                <p><a href="#_Toc17793174">5.50 Scoring. 22</a></p>

                <p><a href="#_Toc17793175">6. Playing 220 (10-ball vs. the Ghost) (rules for intermediate, open,
                        advanced &amp; semi-pro divisions). 22</a></p>

                <p><a href="#_Toc17793176">6.1 Match Rules. 22</a></p>

                <p><a href="#_Toc17793177">6.2 Table Criteria and Racking. 23</a></p>

                <p><a href="#_Toc17793178">6.2 Ball Contact. 23</a></p>

                <p><a href="#_Toc17793179">6.3 Legally Pocketing Balls Out of Order. 23</a></p>

                <p><a href="#_Toc17793180">6.4 Call Shot Rules. 23</a></p>

                <p><a href="#_Toc17793181">6.5 9 Ball On the Break. 23</a></p>

                <p><a href="#_Toc17793182">6.6 Early 9ball 23</a></p>

                <p><a href="#_Toc17793183">6.7 Snap Game Defined. 24</a></p>

                <p><a href="#_Toc17793184">6.8 Cut Game Defined. 24</a></p>

                <p><a href="#_Toc17793185">6.9 Cut Option Executed Defined. 24</a></p>

            </div>
            <div class="col-md-3">


                <p><a href="#_Toc17793186">6.10 Bonus Points 11th Game. 24</a></p>

                <p><a href="#_Toc17793187">6.11 A Perfect 198 Game. 25</a></p>

                <p><a href="#_Toc17793188">6.12 Special Racking Situations. 25</a></p>

                <p><a href="#_Toc17793189">6.13 Slow Play. 25</a></p>

                <p><a href="#_Toc17793190">6.14 Scoring. 25</a></p>

                <p><a href="#_Toc17793191">6.50 Scoring. 25</a></p>

                <p><a href="#_Toc17793192">7. Playing 176 (8-ball vs. the Ghost). 25</a></p>

                <p><a href="#_Toc17793193">7.1 Requirements of the Game. 26</a></p>

                <p><a href="#_Toc17793194">7.2 Racking. 26</a></p>

                <p><a href="#_Toc17793195">7.3 The Break. 26</a></p>

                <p><a href="#_Toc17793196">7.4 The Break Continued. 26</a></p>

                <p><a href="#_Toc17793197">7.5 Ball Contact. 26</a></p>

                <p><a href="#_Toc17793198">7.6 Illegally Pocketing Balls. 27</a></p>

                <p><a href="#_Toc17793199">7.7 8 ball Is Not Neutral 27</a></p>

                <p><a href="#_Toc17793200">7.8 Call Shot Rules. 27</a></p>

                <p><a href="#_Toc17793201">7.9 8 Ball On the Break. 27</a></p>

                <p><a href="#_Toc17793202">7.10 Early 8ball 27</a></p>

                <p><a href="#_Toc17793203">7.11 Snap Game Defined. 27</a></p>

                <p><a href="#_Toc17793204">7.12 Cut Game Defined. 27</a></p>

                <p><a href="#_Toc17793205">7.13 Cut Option Executed Defined. 28</a></p>

                <p><a href="#_Toc17793206">7.14 Bonus Points 11th Game. 28</a></p>

                <p><a href="#_Toc17793207">7.15 A Perfect 220 Game. 28</a></p>

                <p><a href="#_Toc17793208">7.16 Special Racking Situations. 28</a></p>

                <p><a href="#_Toc17793209">7.17 Slow Play. 28</a></p>

                <p><a href="#_Toc17793210">7.18 Scoring. 29</a></p>

                <p><a href="#_Toc17793211">8. English 176 (8 ball) Rules. 29</a></p>

                <p><a href="#_Toc17793212">8.1 Requirements of the Game. 29</a></p>

                <p><a href="#_Toc17793213">8.2 Objective of the Game and Match. 29</a></p>

                <p><a href="#_Toc17793214">8.3 Commencement of the Game. 29</a></p>

                <p><a href="#_Toc17793215">8.3. Commencement of the Game. 29</a></p>

                <p><a href="#_Toc17793216">7.5 FOULS. 29</a></p>

                <p><a href="#_Toc17793217">6. Playing Banks (Banks vs. the Ghost) (rules for intermediate, open,
                        advanced &amp; semi-pro divisions). 32</a></p>


                <p><a href="#_Toc17793218">6.1 Currently not launched. 32</a></p>

            </div>
            <div class="col-md-3">


                <p><a href="#_Toc17793219">7. Playing 110 (14.1 vs. the Ghost) (rules for intermediate, open,
                        advanced &amp; semi-pro divisions). 33</a></p>

                <p><a href="#_Toc17793220">7.1 Currently not launched. 33</a></p>

                <p><a href="#_Toc17793221">8. Playing Honolulu (Honolulu vs. the Ghost) (rules for intermediate,
                        open, advanced &amp; semi-pro divisions) 33</a></p>

                <p><a href="#_Toc17793222">8.1 Currently not launched. 33</a></p>

                <p><a href="#_Toc17793223">9. Playing 3 Cushion (3 Cushion vs. the Ghost) (rules for intermediate,
                        open, advanced &amp; semi-pro divisions) 33</a></p>

                <p><a href="#_Toc17793224">9.1 Currently not launched. 33</a></p>

                <p><a href="#_Toc17793225">9.2 A 3 Cushion Billiard Defined. 33</a></p>

                <p><a href="#_Toc17793226">9.20 The Break. 34</a></p>

                <p><a href="#_Toc17793227">9.30 Scoring. 34</a></p>

                <p><a href="#_Toc17793228">10. Playing Snooker (Snooker vs. the Ghost) (rules for intermediate,
                        open, advanced &amp; semi-pro divisions) 35</a></p>

                <p><a href="#_Toc17793229">10.1 Currently not launched. 35</a></p>

                <p><a href="#_Toc17793230">11. Playing European 8ball (European 8ball vs. the Ghost) (rules for
                        intermediate, open, advanced &amp; semi-pro divisions). 35</a></p>

                <p><a href="#_Toc17793231">11.1 Currently not launched. 35</a></p>

                <p><a href="#_Toc17793232">12. Playing Chinese 8ball (Chinese 8ball vs. the Ghost) (rules for
                        intermediate, open, advanced &amp; semi-pro divisions) 35</a></p>

                <p><a href="#_Toc17793233">12.1 Currently not launched. 35</a></p>

                <p><a href="#_Toc17793234">13. Formats. 35</a></p>

                <p><a href="#_Toc17793235">13.1 Singles Defined. 35</a></p>

                <p><a href="#_Toc17793236">13.1.2 How to Participate in a Singles Event. 35</a></p>

                <p><a href="#_Toc17793237">13.2. Partners Defined. 36</a></p>

                <p><a href="#_Toc17793238">13.2.2 How to Participate in a Partners Event. 36</a></p>

                <p><a href="#_Toc17793239">13.5. Scotch Doubles Defined. 36</a></p>

                <p><a href="#_Toc17793240">13.5.1 How to Participate in a Scotch Doubles Event. 36</a></p>

                <p><a href="#_Toc17793241">13.6. Team Defined. 37</a></p>

                <p><a href="#_Toc17793242">13.6.5 How to Participate In Pro-Am Events. 37</a></p>

            </div>
        </div>
        <!-- End links to anchors -->
        <!-- Start of rules -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>
                        <a name="_Toc17793125">Ghost</a><br/>
                    </h2>
                    <p>An imaginary opponent. The player wins upon completing a match according to the game rules
                        (legally pocketing all the balls required for each game). Playing the &lsquo;Ghost' offers a
                        framework for tracking the player's improvement and statistics for each game. 1.1
                        Part of the Table</p>

                    <p>Table Identification</p>
                    <ol>
                        <li>Foot Spot</li>
                        <li>Head String</li>
                        <li>Head Spot</li>
                        <li>Center Spot</li>
                        <li>Designated Pocket</li>
                    </ol>


                    <h1><a name="_Toc17793127">2.</a>Terminology</h1>

                    <p>&lt; &gt;Run-out &ndash; when all the balls have been legally pocketed according to the game
                        rules.
                    </p>

                    <p>Break &ndash; The first shot of the game.</p>

                    <p>Run &ndash; the cue ball is picked up off the table and placed wherever the player chooses and
                        according to the game rules.</p>

                    <p>Scratch &ndash; when the cue (white) ball is pocketed or knocked off the table.</p>

                    <p>Jump Stick &ndash; A cue stick that is no more than 42 inches in length used to hit the cue ball
                        in
                        such a way that the cue ball bounces off the table (typically over an object ball) to pocket or
                        make
                        legal contact with the desired object ball.</p>

                    <p>Foul &ndash; The Cue ball or any object ball is bounced off the table.</p>

                    <p>The cue ball does not strike the proper object ball according the game rules.</p>

                    <p>The cue ball does not strike any ball.</p>

                    <p>&lt; &gt;Miss &ndash; an object ball does not go in the pocket.</p>
                    <p>Call Shot &ndash; a pocket and ball must be declared prior to shooting.</p>
                    <p>Position Error &ndash; After a player pockets a ball and leaves the cue ball in a position that
                        the
                        player's next shot is a low percentage shot of success. If the player misses then this
                        stat is used.</p>

                    <p>BIH &ndash; Ball In Hand allows the player to pick the cue ball up and place it anywhere on the
                        table
                        for the player's next shot.</p>
                    <p>Stats collected for a match:<br/>
                        CS = Most Consecutive Snap Games in a match<br/>
                        S = Total Snap Games in a match<br/>
                        CCOE &ndash; Most Consecutive COEs in a match<br/>
                        COE = Total Consecutive COEs in a matchCC = Most Consecutive Cut Games in a match<br/>
                        C = Total Cut Games in a match<br/>
                        10BB or 9BB or 9BB = Number of times the game ball (if any) was pocketed on the break)</p>
                    <p>A10B or A9 ball = Number of time the game ball (if any and depending on game rules) were pocketed
                        on
                        the Run.<br/>
                        TBB = Total Balls on the BRK in a match<br/>
                        SB/F = Total # of times there was a scratch of foul made on the BRK in a match<br/>
                        OS = Number of Scratches made on the Run in a match<br/>
                        F = Number of Fouls made during the Run in a match</p>

                    <p>M = Number of Fouls made during the Run in a match</p>

                    <p>PE = Number of Position Errors made during the Run in a match</p>

                    <p>HCP = Handicap</p>

                    <p>SS = Scratch Score (with no handicap)</p>

                    <p>FS = Final Score which is the scratch score plus the handicap</p>

                    <p>Loc = The location in which the player played from</p>

                    <h1><a name="_Toc17793128">3</a>Playing the Ghost General Rules</h1>

                    <p>The following General Rules apply to all the games covered by these rules except when
                        contradicted by
                        specific game rules. Modified rules are applied to specific game rules. Most games
                        usually consist of two turns at the table. While in other games, the player may have
                        additional options. In addition, the General Rules of Behind the Rock cover aspects of the
                        game not directly related to the game rules, such as equipment specifications and organization
                        of
                        events.<br/>
                        The games of Behind the Rock are played on a flat table covered with cloth and bounded by rubber
                        cushions. The player uses a stick (pool cue) to strike a cue ball which in turn strikes object
                        balls. The goal is to drive object balls into six pockets located at the cushion
                        boundary. The games vary according to which balls are legal targets according to the
                        game rules and the requirements to win a match.</p>
                    <h2><a name="_Toc17793129">3.1 Player's Responsibility</a></h2>

                    <p>It is the player's responsibility to be aware of all the rules, regulations and schedules
                        applying to competition and according to each game competition the player enters. The ultimate
                        responsibility rests with the player. In addition to the game rules, equipment requirements
                        and match schedule, every player is responsible for the validity of their own live streaming and
                        score submission. An online version of the rules and schedule can be found on the website.</p>

                    <p>(See <a href="https://behindtherock.org/home/rules">https://behindtherock.org/home/rules</a>)</p>

                    <p>(See
                        <a href="https://behindtherock.org/home/schedule">https://behindtherock.org/home/schedule</a>)
                    </p>

                    <h2><a name="_Toc17793130">3.2 Player's Use of Equipment</a></h2>

                    <p>In general, players are not permitted to introduce novel equipment into the game with the
                        exception of the Tite-n-Rite (or similar) racks and/or cue extensions.</p>

                    <p><strong>NOTE: JUMP CUES ARE NOT ALLOWED.</strong></p>

                    <p>The following uses, among others are considered normal. The equipment must be used only for the
                        purpose of in the manner that the equipment was intended.</p>

                    <p>Cue Stick &ndash; The player is permitted to switch between cue sticks during the match,
                        such as a break stick and normal cues. The player may use either a built-in extender or an
                        add0on extender to increase the length of the stick.</p>
                    <p>Mechanical Bridges &ndash; The player may use up to two mechanical bridges to support the cue
                        stick
                        during the shot. The configuration of the bridges is up to the player. The player may
                        use their own bridge if it is similar to standard bridges.</p>
                    <p>A standard bridge head is no longer than 5.5&rdquo; in length and a maximum of 4&rdquo; in
                        height.
                    </p>
                    <p>Gloves &ndash; The player may use gloves to improve the grip and/or bridge hand function.</p>
                    <p>Use of powder is determined by the rules of the location in which the player's match is being
                        played.3.3 Technical Requirements for A Valid Match</p>

                    <p>Matches are live streamed and recorded for match verification purposes. If there is no streamed
                        recorded video there is no match unless an exception is granted and approved by BTR Review
                        Committee. </p>

                    <p>3.3.1 Players will use Behind the Rock SkorBord to record the points
                        for a match according to game rules.</p>

                    <p>3.3.2 Players will video stream through behindtherock.org website that
                        will store a record of their match through Behind the Rock streaming software. This must be a
                        live feed.</p>

                    <p>3.3.3 All scorecards and video streaming are time and date stamped.
                        The times and dates must match to be considered a valid match.</p>

                    <p>3.3.4 All matches must be streamed verified through the means stated
                        above. Any match without a recorded stream may be voided with no refunds of entry fee.</p>

                    <p>3.3.5 Player's photos of themselves must match the person playing
                        the match. If needed keep your photo in your player profile up to date.</p>

                    <p>3.3.6 Match verification codes displayed while playing a match must be
                        entered at the time of play. No verification code, match is void with no refunds issued.</p>

                    <p>3.3.7 Players must have a current BTR membership</p>

                    <h2><a name="_Toc17793132"></a><a name="_Toc17662243">Membership Types</a></h2>

                    <p><em>BTRT</em> MembershipExpires 365 days</p>
                    <p>Registration $30/365 days</p>

                    <p>Membership #'s are auto numbered in their own table</p>

                    <p>Allows players to participate in all events they are qualified for</p>

                    <p>Player's matches and stats are stored on the website</p>

                    <p>Allowed access to modify their profile</p>

                    <p>Players are allow access to Education Center</p>

                    <p>Player's may purchase access to the training center for an addition $3.99/month</p>
                    <p>&lt; &gt;<em>SBS</em> &ndash; Scoreboard SubscriberExpires 365 days</p>
                    <p>Subscription $1.99/30 days auto renewal each month</p>

                    <p>SBS Subscribers are auto numbers with the prefix of &ldquo;SBS&rdquo; for distinction at a glance
                        on
                        type of membership</p>

                    <p>Players are not entered into events</p>

                    <p>Player's matches and stats are stored on website.</p>

                    <p>Regular public access on website</p>

                    <p>Player's may purchase access to the Education Center for an additional $2.99/month</p>

                    <p>Players may purchase access to the Training Center/Education Center for an additional
                        $6.99/month</p>

                    <p>&lt; &gt;<em>SBTU</em> &ndash; Scoreboard Free Trial UserExpires 30 days after registration</p>

                    <p>Free membership</p>

                    <p>SBTU Subscribers are auto numbers with the prefix of &ldquo;SBTU&rdquo; for distinction at a
                        glance
                        on type of membership</p>

                    <p>Players are not entered into events</p>

                    <p>Player's matches and stats are NOT stored on website</p>

                    <p>Regular public access on website</p>

                    <p></p>

                    <h2><a name="_Toc17793133">3.3 Multi-Player Order of Play</a></h2>

                    <p>Order of play is determined by the order of registration for the tournament. Whichever player
                        is logged in to do the registration will be shown as the first player playing.</p>
                    <h2><a name="_Toc17793134">3.4 Spotting Balls</a></h2>

                    <p>Balls are spotted (returned to play on the table) by placing them according to the game rules.
                        Typically balls are spotted on the foot spot of the table. If more than one ball is to be
                        spotted, balls are spotted in ascending sequential order (from the lowest numbered ball to the
                        highest number ball )(unless otherwise noted in the game rules) as close as possible to the foot
                        spot and between the foot spot and the foot rail, without moving any interfering ball. If
                        spotted ball cannot be placed on the foot spot, it should be placed in contact (if possible)
                        with
                        the corresponding interfering ball in line with the foot spot. However, when the cue ball is
                        next to the spotted ball, the spotted ball should not be placed in contact with the cue
                        ball&rdquo; a small separation must be maintained. If there is an interfering ball the
                        spotted ball must be frozen to the interfering ball. If needed the cue ball or a pocketed
                        object ball may be used to give a gentle tap to place the ball. If a ball marker is needed to
                        mark ball placement, you can order them through the website.</p>

                    <p>(See <a href="https://behindtherock.org/home/store">https://behindtherock.org/home/store</a>)</p>
                    <h2><a name="_Toc17793135">3.5 Ball-in-Hand (BIH) Rules</a></h2>

                    <p>When Cue ball-in-Hand rule is active, the shooter may place the cue ball anywhere on the playing
                        surface (see 1.1 Parts of the Table) and may continue to move the cue ball until he executes a
                        legal
                        shot. (See definition 8.1 Legal Shot). Players may use any part of the cue stick to move
                        the cue ball, including the tip, but no with a forward stroke motion. In some games and for
                        most break shots, placement of the cue ball may be restricted to the area behind the head string
                        depending on the rules of the game, and then 6.10 Bad Cue Ball Placement and 6.11 Bad Play from
                        Behind the Head String may apply.</p>

                    <p>If an adjacent ball is accidently moved while the cue ball is being placed in position, it is a
                        foul
                        and it's game over.</p>
                    <h2><a name="_Toc17793136">3.6 Call Shot Rules</a></h2>

                    <p>In games and/or divisions in which the shooter is required to call shots, the intended ball and
                        pocket must be indicated for each shot if the shot is not obvious. The player must point to
                        the pocket and the number of rails (for live streaming purposes) to identify the intended
                        shot. When designating the pockets and rails, the call-out must be clear to live streaming or
                        that shot may be disqualified. Details of the shot, such as, # and which cushions will be
                        struck,
                        other balls to be contacted or pocketed are irrelevant in most games, with the exception, of the
                        game of Billiards. Some games, such as Billiards, require the distinction of the intended
                        number of rails to be used. Refer to game rules 7. Only one ball may be called on each
                        shot, if there is any confusion, e.g. with bank, combination and similar shots (the shooter must
                        refer to the game rules and division rules for each game) the shooter will indicate the ball,
                        the
                        pocket and number of rails by using their cue stick and obviously pointing at the ball first and
                        then obviously pointing to the intended rails to be used during the shot.</p>
                    <h2><a name="_Toc17793137">3.7 Conclusion of Game</a></h2>

                    <p>The game is over when a ball is not pocketed, a foul is committed or a player legally pockets all
                        the
                        balls.</p>
                    <h2><a name="_Toc17793138">3.8 All-Ball-Foul Rules</a></h2>

                    <p>Behind the Rock plays by All-Ball-Foul Rules. Definition of All-Ball-Foul Rules are as
                        follows&rdquo; Any ball disrupted, moved or touched other than a &ldquo;shot&rdquo; during a
                        game is a foul. This includes things like: clothing touching, touched by a body part,
                        touched by the bridge, cue stick, the rack or any foreign object are all fouls. The
                        table is sacred and should not be disturbed during a game by any foreign object (See Fouls
                        6.8). Penalties may vary according to game or division rules. Refer to the game rules
                        that you will be playing.</p>

                    <p>A ball may settle slightly after it appears to have stopped, possibly due to slight imperfections
                        in
                        the ball or table or traveling over a film rack. Unless this causes a ball to fall into a
                        pocket, it is considered a normal hazard of play, and the ball will not be moved back. If a
                        ball falls into a pocket as a result of settling, it is restored as closely as possible to its
                        original position. If a settling ball falls into a pocket during or just prior to a shot, and
                        this has an effect on the shot, the ball is then restored in the position and the shot will be
                        replayed. The player is not penalized for shooting while a ball is settling. (See also
                        8.3 Ball Pocketed).</p>
                    <h2><a name="_Toc17793139">3.9 Fouls On the Break</a></h2>

                    <p>When a foul is committed on the break shot it is a deduction of one point off your total game.
                        If a ball is pocketed and there is a foul committed on the break, the ball pocketed does not get
                        added to the score, the appropriate foul deduction is taken, the ball pocketed is spotted on the
                        foot spot, and play continues.</p>

                    <p>The following are fouls:</p>

                    <p>Standard Fouls stating in General Rules.</p>
                    <p>Not making first contact with the lowest ball on the table.</p>
                    <p>The cue ball crossing the head string without contacting the one ball first and driving the 4
                        balls
                        past the side pocket.</p>

                    <p>The cue ball crossing the head string and not hitting any ball.</p>
                    <p>Jumping the cue ball or an object ball off the table.</p>
                    <p>Scratching &ndash; Pocketing the cue ball on the Break.</p>
                    <p>Once the cue ball passes the head string, the game has commenced. Even if the cue ball does not
                        hit the rack, it is still scored as your break shot. If you foul on the break you will receive
                        a one point deduction (-1) and you are then entitled to your second turn for that game which
                        means
                        taking ball in hand. Once you have taken ball-in-hand and no ball is pocketed that game is
                        concluded. 3.10 General Fouls During Play</p>

                    <p>There is no point deduction for fouls on your Ball-In-Hand (second) turn of each game for a
                        foul. A foul on your second turn at the table is loss of turn and game over. Fouls for play
                        are as follows:</p>

                    <p>Not making first contact with the lowest numbered ball on the table.</p>
                    <p>Jumping the cue ball or an object ball off the table (balls are re-spotted if this happens on the
                        break).</p>
                    <p>Scratching.</p>
                    <p>Double hitting the cue ball.</p>
                    <p>Push Shot.</p>
                    <p>Interfering while the balls are still moving.</p>
                    <p>Bad cue ball placement or disturbing the lay of the table when placing ball-in-hand.</p>
                    <p>Moving or touching any object ball on the table once game has commenced. This includes
                        disturbing the balls when removing the rack if using a film rack (i.e. Magic Rack), moving a
                        ball
                        with clothing or any piece of equipment. It is recommended to let the scorekeeper remove the
                        rack for the playing player.</p>
                    <p>Pocketing a ball out of order without first making legal contact with lowest numbered ball
                        first.</p>
                    <p>No foot on floor when shooting.</p>
                    <p>Shooting without re-spotting balls that are required to be re-spotted.</p>
                    <p>Hitting the cue ball more than once (double hitting).</p>
                    <p>If a player's body or clothing should touch any ball.</p>
                    <p>Player not having at least part of one foot on the floor.</p>
                    <p>Playing or touching with the cue any ball other than the cue ball.</p>
                    <p>Striking the cue ball with any part of the cue other than the tip.</p>
                    <p>Playing out of turn (if playing multi-player). Call the main office for help. 1 (541) 204-1929
                    </p>
                    <p>Playing before all balls have come to rest.</p>
                    <p>Playing before any ball(s) require re-spotting.1. If a film rack is used for the break and after
                        the
                        break a ball remains on the rack the player may place the palm of their hand on the table,
                        slightly
                        lift the ball upwards to slide the film rack out of the playing area. If you prefer you can
                        check our store for ball markers to avoid any confrontation removing balls can make.</p>

                    <p>2. If a film rack is used for the break and after the break there are more than one (1) ball
                        sitting on the film rack, the balls must not be disturbed until one or both of the balls have
                        been
                        bumped off the rack.</p>
                    <p><strong>3.12 Conclusion of Game</strong></p>

                    <p>The game is over when a ball is not pocketed, a foul is committed or a player legally pockets all
                        the
                        balls according to the game rules.</p>

                    <h2><a name="_Toc17793142">3.13 Cut and Snap Game Defined</a></h2>

                    <p>This rule applies to 176, 198, 220, banks, English 8 ball and Honolulu.</p>

                    <p>Cut Game<br/>
                        A Cut Game is defined as:<br/>
                        if a player doesn't not make a ball on the break and then runs all the balls off the table
                        according to the game rules. See Scoring for the value of a CUT game.</p>
                    <p>Snap Game</p>
                    <p>A COE Game is defined as:<br/>
                        if a player doesn't not make a ball on the break, runs all the balls off the table according
                        to the game rules and in the game following does not take BIH. See Scoring for the value of a
                        COE game.4Play 220 vs the Ghost Rules</p>

                    <p>(rules for intermediate, open, advanced &amp; semi-pro divisions)</p>

                    <p>All the General Rules for all games apply. Any exceptions to those rules are described in this
                        Section 3.</p>

                    <p>Objective: to break the balls and run out each rack for 11 games according to the game rules as
                        follows: Exception to the 11 game rule See Section 3.10</p>

                    <h2><a name="_Toc17793144">4.1 Racking</a></h2>

                    <p>Rack balls one through ten in a triangle-shaped rack. The one ball is placed at the head of the
                        triangle and rests on the foot spot. The ten (10) ball must be at the center of the triangle.
                        Spread
                        the remaining balls in random order to fill out the top 4 rows of a standard triangle rack.
                    </p>

                    <p>Exception to the 11 games equals a match rule.</p>
                    <p>4.1.1Press the balls forward so all balls are touching or ensure all balls are touching. Film
                        Racks are recommended for this game.</p>
                    <p>4.1.2Take the cue ball in hand behind the head string. Shoot the cue ball at the triangle to
                        break up the balls. The cue ball must contact the lowest number ball on the table (which would
                        be
                        the one (1) ball on the break) first for the break to be legal. This is your first shot of the
                        game
                        called your break shot.</p>
                    <h2><a name="_Toc17793145">4.2 Ball Contact</a></h2>

                    <p>For each shot the player must contact the lowest-numbered ball on the table before hitting any
                        other
                        ball. The order that you sink the balls does not matter, so long as the cue ball contacts the
                        lowest
                        numbered ball on the table first.</p>
                    <h2><a name="_Toc17793146">4.3 Legally Pocketing Balls Out of Order</a></h2>

                    <p>When a ball is legally pocketed out of order and a legal hit was made (contacting the lowest
                        number
                        ball on the table first), the ball remains down, and one point is earned.</p>
                    <h2><a name="_Toc17793147">4.4 Call Shot Rules</a></h2>

                    <p>The Call Shot Rules do not apply to the game of 220.</p>
                    <h2><a name="_Toc17793148">4.5 10 Ball On the Break</a></h2>

                    <p>When the 10ball is pocketed on the &ldquo;Break&rdquo; it is re-spotted at the foot spot. If
                        the foot spot is occupied with another ball, then it is spotted on the head spot. If the head
                        spot is occupied, then it is re-spotted in the center of the table. If all three spots are
                        occupied by another ball, then the 10ball is re-spotted behind the foot spot as close to the
                        foot
                        spot as possible.</p>
                    <h2><a name="_Toc17793149">4.6 Early 10ball</a></h2>

                    <p>Pocketing an early 10ball is awarded one point and re-spotted. When re-spotting the 10ball at
                        any time other than the Break, it is to be re-spotted on the foot spot or as close behind the
                        foot
                        spot as possible. If the foot spot is occupied by another ball it is recommended to let your
                        score
                        keeper spot if for the playing player. When spotting balls and the spot is occupied, spotting
                        the ball must be frozen when spotting. If you move a ball when re-spotting it is a foul and it
                        is the conclusion of the game. It's best to have someone spot it for you.</p>
                    <h2><a name="_Toc17793150">3.7 Snap Game Defined</a></h2>

                    <p>When a player makes a legal break, pockets at least one ball on the break, and successfully
                        pockets
                        all the balls according to game rules (i.e. runs out), it is called a &ldquo;Snap
                        Game&rdquo;. Player receives 10 points for that game plus will add all the points earned
                        in the next game following</p>

                    <p>the Snap Game to the Snap game score. See scoring examples.</p>
                    <h2><a name="_Toc17793151">4.8 Cut Game Defined</a></h2>

                    <p>When a player makes a legal break and does not pocket a ball on the break, but successfully
                        pockets
                        all the balls according to game rules (i.e. runs out), it is called a &ldquo;Cut Game&rdquo;.
                        On the players next turn at the table he/she breaks the balls and has a choice of how to play
                        the
                        table. If the player decides to take ball in hand, that player will add the balls that were
                        pocketed on the break in the game after the Cut game to his/her cut game score. Or the player
                        may execute the Cut Option. (See Scoring Examples).</p>
                    <h2><a name="_Toc17793152">4.9 Cut Option Executed Defined</a></h2>

                    <p>The game after the Cut game. The player may take ball in hand as explained in (9.) or play the
                        table
                        as it lays after the break with no ball in hand. If a player takes ball-in-hand, then rules
                        for a Cut Game apply (see item 9). If the player decides to play the table as it lays without
                        taking ball-in-hand, then this is a Cut Option Executed (COE). Taking the COE will convert the
                        scoring for a Cut game to have the same value as if it were a Snap game. The same scoring
                        rules apply when ball-in-hand is not taken after a Cut game as a Snap game. (See Scoring
                        Examples).</p>

                    <h2><a name="_Toc17793153">4.10 Bonus Points 11th Game</a></h2>

                    <p>In the 11th game, if a player has a Snap Game or a Cut Game, the player is entitled to one last
                        game. The 12th game is not a true 12th game. It is only played to finish scoring the
                        11th game. Once the 11th game scoring is completed the match is complete.</p>

                    <p>If a player is playing off a Cut Game in game 11, the player will have the option to take BIH
                        after
                        the break in the 12th game.</p>

                    <p>If the player takes ball-in-hand in the 12th game, this completes the scoring for game 11 and the
                        match is concluded.</p>

                    <p>If the player takes the COE with a Cut game in the 11th game, then the player will play a
                        complete
                        12th game with all the points in game 12 being added back to the 11th game.</p>

                    <p>If a player has a Snap game in game 11 then a complete 12th game is played and added to the 11th
                        game
                        score.</p>
                    <h2><a name="_Toc17793154">4.11 A Perfect 220 Game</a></h2>

                    <p>Winning a perfect match of 220 occurs when the player has run out every game as a Snap Game or
                        run
                        out upon executing the Cut Option in all 11 games and successfully run out the subsequent 12th
                        game. 220 points is considered to be a perfect score. It is possible to score more than
                        220 points, but scoring 220 points in the manner just described is viewed as a perfect game.</p>

                    <h2><a name="_Toc17793155">4.12 Special Racking Situations</a></h2>

                    <p>Standard Fouls apply in this game. If a player commits a standard foul on the break, a point is
                        subtracted from the score, balls are spotted with the lowest numbered ball on the foot spot (or
                        as
                        close to the foot spot as possible in a line from the foot spot to the center diamond on the end
                        rail) and play continues. There is no penalty (loss of point(s)) if any other fouls are
                        committed
                        after the break during your game. Committing a foul conclude the current game. (See General
                        Fouls).</p>

                    <h2><a name="_Toc17793156">4.13 Slow Play</a></h2>

                    <p>Slow Play is not tolerated. There is a time limit on all matches. Players must
                        complete their match in the allotted time. There is a stop watch on the SkorBord as you play
                        your
                        match. Keep an eye on it. If you don't complete your match within that allotted
                        time your match will be void and no refunds will be issued.<br/>

                        Playing 220: 1 player is allowed 1 hour<br/>

                        2 players are allowed 100
                        minutes<br/>

                        3 players are allowed 160 minutes
                    </p>

                    <h2><a name="_Toc17793157">4.14 Scoring</a></h2>

                    <p>The following are some sample score sheets on how to mark your games and the statistics for a
                        game of
                        220. Refer to the scoring videos on the website for more information.</p>

                    <h1><a name="_Toc17793158">5. Playing 198 (9-ball vs. the Ghost) </a><br/>
                        (rules for intermediate, open, advanced &amp; semi-pro divisions)</h1>

                    <p>All the General Rules in Section 1 and Games Rules in Section 3 apply. Any exceptions to those
                        rules are described in Section 4.</p>

                    <p>Objective: to break the balls and run out each rack for 11 games according to the game rules in
                        Section 4 Titled 198 with the exceptions of the rules as follows:</p>

                    <h2><a name="_Toc17793159">5.1 Match Rules</a></h2>

                    <p>A Match is 11 games.
                        Exception: If a player has a Cut Game or a Snap Game in game 11 then a 12th game is
                        awarded until the 11th game is completed.
                        If a player has a Snap game in the 11th game a full 12th game is allowed to be played and
                        the points in the 12th game are added to the 11th game and concludes the match.
                        If a player has Cut game in the 11th game then:
                        If the player takes BIH (ball in hand) in the 12th game this will finish scoring the 11th
                        game and the match is concluded.
                        If the player does NOT take BIH in the 12th game then the player continues to shoot until
                        they foul, scratch, miss or run out (run all the balls off the table). Then the match is
                        concluded.5.1 Table Criteria and Racking</p>

                    <p>The game is played on a rectangular 6-pocket table with the dimensions of 3.5'x7'.
                        The numbered balls are racked one (1) through nine (9) in a diamond-shaped rack. The one ball is
                        placed at the head of the triangle resting on the foot spot. The nine (9) ball must be at the
                        center
                        of the diamond in a direct line with the one (1) ball on the foot spot in a line to the center
                        diamond on the foot rail. Spread the remaining balls in random order or in any pattern to fill
                        out
                        the top 3 rows of a standard diamond shaped rack with 2 balls in row 4 and one (1) ball in row 5
                        with the ball in row 5 in alignment with the one (1) ball and nine (9) ball from the foot spot
                        to
                        the center diamond on the foot rail.</p>

                    <p>4.1.1 Press the balls forward so all balls are touching or ensure all balls are touching and
                        remove
                        the rack. Film Racks are recommended for this game.<br/>
                    </p>

                    <p>4.1.2Take the cue ball in hand behind the head string. Shoot the cue ball at the balls to
                        spread the balls over the table. The cue ball must contact the lowest number ball on the table
                        (which would be the one (1) ball on the break) first for the break to be legal. This is your
                        first
                        shot of the game called your break shot.</p>
                    <h2><a name="_Toc17793161">5.2 Ball Contact</a></h2>

                    <p>For each shot the player must contact the lowest-numbered ball on the table before hitting any
                        other
                        ball. The order that you sink the balls does not matter, so long as the cue ball contacts the
                        lowest
                        numbered ball on the table first.</p>
                    <h2><a name="_Toc17793162">5.3 Legally Pocketing Balls Out of Order</a></h2>

                    <p>When a ball is legally pocketed out of order and a legal hit was made (contacting the lowest
                        number
                        ball on the table first), the ball remains down, and one point is earned.</p>
                    <h2><a name="_Toc17793163">5.4 Call Shot Rules</a></h2>

                    <p>The Call Shot Rules do not apply to the game of 198.</p>
                    <h2><a name="_Toc17793164">5.5 9 Ball On the Break</a></h2>

                    <p>When the 9ball is pocketed on the &ldquo;Break&rdquo; it is re-spotted at the foot spot. If the
                        foot spot is occupied with another ball, then it is spotted on the head spot. If the head spot
                        is occupied, then it is re-spotted in the center of the table. If all three spots are occupied
                        by another ball, then the 9ball is re-spotted behind the foot spot as close to the foot spot as
                        possible.</p>

                </div>
                <div class="col-md-6">
                    <h2><a name="_Toc17793165">5.6 Early 9ball</a></h2>

                    <p>Pocketing an early 9ball is awarded one point and re-spotted. When re-spotting the 10ball at
                        any time other than the Break, it is to be re-spotted on the foot spot or as close behind the
                        foot
                        spot as possible. If the foot spot is occupied by another ball it is recommended to let your
                        score
                        keeper spot if for the playing player. When spotting balls and the spot is occupied, spotting
                        the ball must be frozen when spotting. If you move a ball when re-spotting it is a foul and it
                        is the conclusion of the game. It's best to have someone spot it for you.</p>
                    <h2><a name="_Toc17793166">5.7 Snap Game Defined</a></h2>

                    <p>When a player makes a legal break, pockets at least one ball on the break, and successfully
                        pockets
                        all the balls according to game rules (i.e. runs out), it is called a &ldquo;Snap
                        Game&rdquo;. Player receives 9 points for that game plus will add all the points earned
                        in the next game following</p>

                    <p>the Snap Game to the Snap game score. See scoring examples.</p>
                    <h2><a name="_Toc17793167">5.8 Cut Game Defined</a></h2>

                    <p>When a player makes a legal break and does not pocket a ball on the break, but successfully
                        pockets
                        all the balls according to game rules (i.e. runs out), it is called a &ldquo;Cut Game&rdquo;.
                        On the players next turn at the table he/she breaks the balls and has a choice of how to play
                        the
                        table. If the player decides to take ball in hand, that player will add the balls that were
                        pocketed on the break in the game after the Cut game to his/her cut game score. Or the player
                        may execute the Cut Option. (See Scoring Examples).</p>
                    <h2><a name="_Toc17793168">5.9 Cut Option Executed Defined</a></h2>

                    <p>The game after the Cut game. The player may take ball in hand as explained in (9.) or play the
                        table
                        as it lays after the break with no ball in hand. If a player takes ball-in-hand, then rules
                        for a Cut Game apply (see item 9). If the player decides to play the table as it lays without
                        taking ball-in-hand, then this is a Cut Option Executed (COE). Taking the COE will convert the
                        scoring for a Cut game to have the same value as if it were a Snap game. The same scoring
                        rules apply when ball-in-hand is not taken after a Cut game as a Snap game. (See Scoring
                        Examples).</p>
                    <h2><a name="_Toc17793169">5.10 Bonus Points 11th Game</a></h2>

                    <p>In the 11th game, if a player has a Snap Game or a Cut Game, the player is entitled to one last
                        game. The 12th game is not a true 12th game. It is only played to finish scoring the
                        11th game. Once the 11th game scoring is completed the match is complete.</p>

                    <p>If a player is playing off a Cut Game in game 11, the player will have the option to take BIH
                        after
                        the break in the 12th game.</p>

                    <p>If the player takes ball-in-hand in the 12th game, this completes the scoring for game 11 and the
                        match is concluded.</p>

                    <p>If the player takes the COE with a Cut game in the 11th game, then the player will play a
                        complete
                        12th game with all the points in game 12 being added back to the 11th game.</p>

                    <p>If a player has a Snap game in game 11 then a complete 12th game is played and added to the 11th
                        game
                        score.</p>
                    <h2><a name="_Toc17793170">5.11 A Perfect 198 Game</a></h2>

                    <p>Winning a perfect match of 198 occurs when the player has run out every game as a Snap Game or
                        run
                        out upon executing the Cut Option in all 11 games and successfully run out the subsequent 12th
                        game. 198 points is considered to be a perfect score. It is possible to score more than
                        198 points, but scoring 198 points in the manner just described is viewed as a perfect game.</p>
                    <h2><a name="_Toc17793171">5.12 Special Racking Situations</a></h2>

                    <p>Standard Fouls apply in this game. If a player commits a standard foul on the break, a point is
                        subtracted from the score, balls are spotted with the lowest numbered ball on the foot spot (or
                        as
                        close to the foot spot as possible in a line from the foot spot to the center diamond on the end
                        rail) and play continues. There is no penalty (loss of point(s)) if any other fouls are
                        committed
                        after the break during your game. Committing a foul conclude the current game. (See General
                        Fouls).</p>

                    <h2><a name="_Toc17793172">5.13 Slow Play</a></h2>

                    <p>Slow Play is not tolerated. There is a time limit on all matches. Players must
                        complete their match in the allotted time. There is a stop watch on the SkorBord as you play
                        your
                        match. Keep an eye on it. If you don't complete your match within that allotted
                        time your match will be void and no refunds will be issued.<br/>

                        Playing 198: 1 player is allowed 1 hour<br/>

                        2 players are allowed 100
                        minutes<br/>

                        3 players are allowed 160 minutes
                    </p>

                    <h2><a name="_Toc17793173">5.14 Scoring</a></h2>

                    <p>The following are some sample score sheets on how to mark your games and the statistics for a
                        game of
                        198. Refer to the scoring videos on the website for more information.</p>

                    <h2><a name="_Toc17793174">5.50 Scoring</a></h2>

                    <p>Scoring for 220 is identical to the scoring process for 198. The exception to this is that
                        there are 10 points awarded for a break and run instead of 9 points as described in Section
                        3.13.
                    </p>
                    <h1><a name="_Toc17793175">6. Playing 220 (10-ball vs. the Ghost) </a><br/>
                        (rules for intermediate, open, advanced &amp; semi-pro divisions)</h1>

                    <p>All the General Rules in Section 1 and Games Rules in Section 3 apply. Any exceptions to those
                        rules are described in Section 4.</p>

                    <p>Objective: to break the balls and run out each rack for 11 games according to the game rules in
                        Section 4 Titled 220 with the exceptions of the rules as follows:</p>

                    <h2><a name="_Toc17793176">6.1 Match Rules</a></h2>

                    <p>A Match is 11 games.
                        Exception: If a player has a Cut Game or a Snap Game in game 11 then a 12th game is
                        awarded until the 11th game is completed.
                        If a player has a Snap game in the 11th game a full 12th game is allowed to be played and
                        the points in the 12th game are added to the 11th game and concludes the match.
                        If a player has Cut game in the 11th game then:
                        If the player takes BIH (ball in hand) in the 12th game this will finish scoring the 11th
                        game and the match is concluded.
                        If the player does NOT take BIH in the 12th game then the player continues to shoot until
                        they foul, scratch, miss or run out (run all the balls off the table). Then the match is
                        concluded.6.2 Table Criteria and Racking</p>

                    <p>The game is played on a rectangular 6-pocket table with the dimensions of 3.5'x7'.
                        The numbered balls are racked one (1) through nine (9) in a diamond-shaped rack. The one ball is
                        placed at the head of the triangle resting on the foot spot. The nine (9) ball must be at the
                        center
                        of the diamond in a direct line with the one (1) ball on the foot spot in a line to the center
                        diamond on the foot rail. Spread the remaining balls in random order or in any pattern to fill
                        out
                        the top 3 rows of a standard diamond shaped rack with 2 balls in row 4 and one (1) ball in row 5
                        with the ball in row 5 in alignment with the one (1) ball and nine (9) ball from the foot spot
                        to
                        the center diamond on the foot rail.</p>

                    <p>6.1.1 Press the balls forward so all balls are touching or ensure all balls are touching and
                        remove
                        the rack. Film Racks are recommended for this game.<br/>
                    </p>

                    <p>6.1.2Take the cue ball in hand behind the head string. Shoot the cue ball at the balls to
                        spread the balls over the table. The cue ball must contact the lowest number ball on the table
                        (which would be the one (1) ball on the break) first for the break to be legal. This is your
                        first
                        shot of the game called your break shot.</p>
                    <h2><a name="_Toc17793178">6.2 Ball Contact</a></h2>

                    <p>For each shot the player must contact the lowest-numbered ball on the table before hitting any
                        other
                        ball. The order that you sink the balls does not matter, so long as the cue ball contacts the
                        lowest
                        numbered ball on the table first.</p>
                    <h2><a name="_Toc17793179">6.3 Legally Pocketing Balls Out of Order</a></h2>

                    <p>When a ball is legally pocketed out of order and a legal hit was made (contacting the lowest
                        number
                        ball on the table first), the ball remains down, and one point is earned.</p>
                    <h2><a name="_Toc17793180">6.4 Call Shot Rules</a></h2>

                    <p>The Call Shot Rules do not apply to the game of 198.</p>
                    <h2><a name="_Toc17793181">6.5 9 Ball On the Break</a></h2>

                    <p>When the 9ball is pocketed on the &ldquo;Break&rdquo; it is re-spotted at the foot spot. If the
                        foot spot is occupied with another ball, then it is spotted on the head spot. If the head spot
                        is occupied, then it is re-spotted in the center of the table. If all three spots are occupied
                        by another ball, then the 9ball is re-spotted behind the foot spot as close to the foot spot as
                        possible.</p>
                    <h2><a name="_Toc17793182">6.6 Early 9ball</a></h2>

                    <p>Pocketing an early 9ball is awarded one point and re-spotted. When re-spotting the 10ball at
                        any time other than the Break, it is to be re-spotted on the foot spot or as close behind the
                        foot
                        spot as possible. If the foot spot is occupied by another ball it is recommended to let your
                        score
                        keeper spot if for the playing player. When spotting balls and the spot is occupied, spotting
                        the ball must be frozen when spotting. If you move a ball when re-spotting it is a foul and it
                        is the conclusion of the game. It's best to have someone spot it for you.</p>
                    <h2><a name="_Toc17793183">6.7 Snap Game Defined</a></h2>

                    <p>When a player makes a legal break, pockets at least one ball on the break, and successfully
                        pockets
                        all the balls according to game rules (i.e. runs out), it is called a &ldquo;Snap
                        Game&rdquo;. Player receives 9 points for that game plus will add all the points earned
                        in the next game following</p>

                    <p>the Snap Game to the Snap game score. See scoring examples.</p>
                    <h2><a name="_Toc17793184">6.8 Cut Game Defined</a></h2>

                    <p>When a player makes a legal break and does not pocket a ball on the break, but successfully
                        pockets
                        all the balls according to game rules (i.e. runs out), it is called a &ldquo;Cut Game&rdquo;.
                        On the players next turn at the table he/she breaks the balls and has a choice of how to play
                        the
                        table. If the player decides to take ball in hand, that player will add the balls that were
                        pocketed on the break in the game after the Cut game to his/her cut game score. Or the player
                        may execute the Cut Option. (See Scoring Examples).</p>
                    <h2><a name="_Toc17793185">6.9 Cut Option Executed Defined</a></h2>

                    <p>The game after the Cut game. The player may take ball in hand as explained in (9.) or play the
                        table
                        as it lays after the break with no ball in hand. If a player takes ball-in-hand, then rules
                        for a Cut Game apply (see item 9). If the player decides to play the table as it lays without
                        taking ball-in-hand, then this is a Cut Option Executed (COE). Taking the COE will convert the
                        scoring for a Cut game to have the same value as if it were a Snap game. The same scoring
                        rules apply when ball-in-hand is not taken after a Cut game as a Snap game. (See Scoring
                        Examples).</p>
                    <h2><a name="_Toc17793186">6.10 Bonus Points 11th Game</a></h2>

                    <p>In the 11th game, if a player has a Snap Game or a Cut Game, the player is entitled to one last
                        game. The 12th game is not a true 12th game. It is only played to finish scoring the
                        11th game. Once the 11th game scoring is completed the match is complete.</p>

                    <p>If a player is playing off a Cut Game in game 11, the player will have the option to take BIH
                        after
                        the break in the 12th game.</p>

                    <p>If the player takes ball-in-hand in the 12th game, this completes the scoring for game 11 and the
                        match is concluded.</p>

                    <p>If the player takes the COE with a Cut game in the 11th game, then the player will play a
                        complete
                        12th game with all the points in game 12 being added back to the 11th game.</p>

                    <p>If a player has a Snap game in game 11 then a complete 12th game is played and added to the 11th
                        game
                        score.</p>
                    <h2><a name="_Toc17793187">6.11 A Perfect 198 Game</a></h2>

                    <p>Winning a perfect match of 198 occurs when the player has run out every game as a Snap Game or
                        run
                        out upon executing the Cut Option in all 11 games and successfully run out the subsequent 12th
                        game. 198 points is considered to be a perfect score. It is possible to score more than
                        198 points, but scoring 198 points in the manner just described is viewed as a perfect game.</p>
                    <h2><a name="_Toc17793188">6.12 Special Racking Situations</a></h2>

                    <p>Standard Fouls apply in this game. If a player commits a standard foul on the break, a point is
                        subtracted from the score, balls are spotted with the lowest numbered ball on the foot spot (or
                        as
                        close to the foot spot as possible in a line from the foot spot to the center diamond on the end
                        rail) and play continues. There is no penalty (loss of point(s)) if any other fouls are
                        committed
                        after the break during your game. Committing a foul conclude the current game. (See General
                        Fouls).</p>

                    <h2><a name="_Toc17793189">6.13 Slow Play</a></h2>

                    <p>Slow Play is not tolerated. There is a time limit on all matches. Players must
                        complete their match in the allotted time. There is a stop watch on the SkorBord as you play
                        your
                        match. Keep an eye on it. If you don't complete your match within that allotted
                        time your match will be void and no refunds will be issued.<br/>

                        Playing 198: 1 player is allowed 1 hour<br/>

                        2 players are allowed 100
                        minutes<br/>

                        3 players are allowed 160 minutes
                    </p>

                    <h2><a name="_Toc17793190">6.14 Scoring</a></h2>

                    <p>The following are some sample score sheets on how to mark your games and the statistics for a
                        game of
                        198. Refer to the scoring videos on the website for more information.</p>

                    <h2><a name="_Toc17793191">6.50 Scoring</a></h2>

                    <p>Scoring for 198 is identical to the scoring process for 220. The exception to this is that
                        there are only 9 points awarded for a break and run instead of 10 points as described in Section
                        3.13.</p>
                    <p></a>7. Playing 176 (8-ball vs. the Ghost)<br/>
                        (rules for intermediate, open, advanced &amp; semi-pro divisions)<br/>
                        All the General Rules in Section 1 and Games Rules in Section 3 apply. Any exceptions to those
                        rules are described in Section 5.</p>

                    <p>Objective: to break the balls and run out each rack for 11 games according to the game rules in
                        Section 5 Titled 176 with the exceptions of the rules as follows:</p>

                    <h2><a name="_Toc17793193">7.1 Requirements of the Game</a></h2>


                    <p>The game is played on a rectangular 6-pocket table with the dimension label of 3.5'x7' or
                        4'x8' table with 15 balls and a cue ball. Balls are colored two different
                        ways. Numbered groups, 1-7 which are solid colored balls, 9-15 are striped colored balls, the
                        8 ball is a solid color of black. Alternatively, the numerical groups 1-7 and 9-15 may be
                        represented by two different sets of 7 colored balls. Usually red replaces stripes (9-15),
                        yellow
                        replace solid (1-7). Balls in the two groups are known as object balls.</p>


                    <p>The player or team pocketing all their group of object balls in any order and then legally
                        pockets
                        the 8 ball concludes a game. A match consists of 11 games (See Exception rule 4.1) is a
                        completed match.</p>
                    <h2><a name="_Toc17793194">7.2 Racking</a></h2>

                    <p>Rack all fifteen (15) balls in a triangle-shaped rack. The head ball rests on the foot spot.
                        Spread the remaining balls in random order to fill out the entire rack of five (5) rows of a
                        standard triangle rack. The head ball of the triangle is placed on the foot spot in a line to
                        the center diamond on the foot rail. Spread the remaining balls in random order or in any
                        pattern to
                        fill out all 5 rows of a standard triangle rack with four (4) balls in row 4 and five (5) balls
                        in
                        row 5.</p>
                    <p>7.2.1Press the balls forward so all balls are touching or ensure all balls are touching. Film
                        Racks are recommended for this game.</p>
                    <h2><a name="_Toc17793195">7.3 The Break</a></h2>

                    <p>Take the cue ball in hand behind the head string. Shoot the cue ball at the triangle to spread
                        the balls on the table. The cue ball may contact any ball on the table. This is your first shot
                        of
                        the game called your break shot.</p>
                    <h2><a name="_Toc17793196">7.4 The Break Continued</a></h2>

                    <p>After the break shot, the player will enter the # of balls they pocketed on the break into the
                        Skorbord earning one point per ball. At this time the player will decide and mark on the
                        Skorbord which suit they will be taking. A suit in American 8 ball will either be solids or
                        stripes.</p>
                    <h2><a name="_Toc17793197">7.5 Ball Contact</a></h2>

                    <p>For each shot the player must contact their suited ball first before hitting any other ball or it
                        is
                        a foul. It does not matter which order the balls are pocketed so long as the cue ball contacts
                        the
                        proper suited ball first.</p>
                    <h2><a name="_Toc17793198">7.6 Illegally Pocketing Balls</a></h2>

                    <p>When a ball is illegally pocketed (defined by not designating a ball and a pocket or making a
                        legal
                        hit) then the game is concluded. The illegally pocketed ball will be claimed in the ball count
                        and the player will claim that they made a foul and 1 point will be deducted from the game
                        score.
                    </p>
                    <h2><a name="_Toc17793199">7.7 8 ball Is Not Neutral</a></h2>

                    <p>At anytime during the game the 8 ball is not neutral. You may not use is at the first ball in a
                        combination, billiard or carrom on any shot.</p>
                    <h2><a name="_Toc17793200">7.8 Call Shot Rules</a></h2>

                    <p>The Call Shot Rules do apply to the game of 176. Any unobvious ball and pocket must be
                        designated with action pointing at the ball and the intended pocket prior to shooting. If the
                        ball is not called, then the shot could be found as a foul and the call will NOT go to the
                        shooter. Be advised on this rule as it could cost you.</p>
                    <h2><a name="_Toc17793201">7.9 8 Ball On the Break</a></h2>

                    <p>When the 8 ball is pocketed on the &ldquo;Break&rdquo; an extra point is given and the 8 ball is
                        re-spotted at the foot spot. If the foot spot is occupied with another ball, then it is
                        spotted on the head spot. If the head spot is occupied, then it is re-spotted in the center of
                        the table. If all three spots are occupied by another ball, then the 8 ball is re-spotted
                        behind the foot spot as close to the foot spot as possible.</p>
                    <h2><a name="_Toc17793202">7.10 Early 8ball</a></h2>

                    <p>Pocketing an early 8 ball is a foul and the game is over. There is a two point deduction (-2)
                        added to the score.</p>
                    <h2><a name="_Toc17793203">7.11 Snap Game Defined</a></h2>

                    <p>When a player makes a legal break, pockets at least one ball on the break, and successfully
                        pockets
                        all the balls in their suit according to game rules (i.e. runs out), it is called a &ldquo;Snap
                        Game&rdquo;. Player receives 8 points for that game plus will add all the points earned
                        in the next game following the Snap Game to the Snap game score. See scoring examples.</p>
                    <h2><a name="_Toc17793204">7.12 Cut Game Defined</a></h2>

                    <p>When a player makes a legal break and does not pocket a ball on the break, but successfully
                        pockets
                        all the balls according to game rules (i.e. runs out), it is called a &ldquo;Cut Game&rdquo;.
                        On the players next turn at the table he/she breaks the balls and has a choice of how to play
                        the
                        table. If the player decides to take ball in hand, that player will add the balls that were
                        pocketed on the break in the game after the Cut game to his/her cut game score. Or the player
                        may execute the Cut Option. (See Scoring Examples).</p>
                    <h2><a name="_Toc17793205">7.13 Cut Option Executed Defined</a></h2>

                    <p>The game after the Cut game. The player may take ball in hand as explained in (9.) or play the
                        table
                        as it lays after the break with no ball in hand. If a player takes ball-in-hand, then rules
                        for a Cut Game apply (see item 9). If the player decides to play the table as it lays without
                        taking ball-in-hand, then this is a Cut Option Executed (COE). Taking the COE will convert the
                        scoring for a Cut game to have the same value as if it were a Snap game. The same scoring
                        rules apply when ball-in-hand is not taken after a Cut game as a Snap game. (See Scoring
                        Examples).</p>
                    <h2><a name="_Toc17793206">7.14 Bonus Points 11th Game</a></h2>

                    <p>In the 11th game, if a player has a Snap Game or a Cut Game, the player is entitled to one last
                        game. The 12th game is not a true 12th game. It is only played to finish scoring the
                        11th game. Once the 11th game scoring is completed the match is complete.</p>

                    <p>If a player is playing off a Cut Game in game 11, the player will have the option to take BIH
                        after
                        the break in the 12th game.</p>

                    <p>If the player takes ball-in-hand in the 12th game, this completes the scoring for game 11 and the
                        match is concluded.</p>

                    <p>If the player takes the COE with a Cut game in the 11th game, then the player will play a
                        complete
                        12th game with all the points in game 12 being added back to the 11th game.</p>

                    <p>If a player has a Snap game in game 11 then a complete 12th game is played and added to the 11th
                        game
                        score.</p>
                    <h2><a name="_Toc17793207">7.15 A Perfect 220 Game</a></h2>

                    <p>Winning a perfect match of 198 occurs when the player has run out every game as a Snap Game or
                        run
                        out upon executing the Cut Option in all 11 games and successfully run out the subsequent 12th
                        game. 198 points is considered to be a perfect score. It is possible to score more than
                        198 points, but scoring 198 points in the manner just described is viewed as a perfect game.</p>
                    <h2><a name="_Toc17793208">7.16 Special Racking Situations</a></h2>

                    <p>Standard Fouls apply in this game. If a player commits a standard foul on the break, a point is
                        subtracted from the score, balls are spotted with the lowest numbered ball on the foot spot (or
                        as
                        close to the foot spot as possible in a line from the foot spot to the center diamond on the end
                        rail) and play continues. There is no penalty (loss of point(s)) if any other fouls are
                        committed
                        after the break during your game. Committing a foul conclude the current game. (See General
                        Fouls).</p>

                    <h2><a name="_Toc17793209">7.17 Slow Play</a></h2>

                    <p>Slow Play is not tolerated. There is a time limit on all matches. Players must
                        complete their match in the allotted time. There is a stop watch on the SkorBord as you play
                        your
                        match. Keep an eye on it. If you don't complete your match within that allotted
                        time your match will be void and no refunds will be issued.<br/>

                        Playing 198: 1 player is allowed 1 hour<br/>

                        2 players are allowed 100
                        minutes<br/>

                        3 players are allowed 160 minutes
                    </p>

                    <h2><a name="_Toc17793210">7.18 Scoring</a></h2>

                    <p>Scoring for 176 is identical to the scoring process for 220 &amp; 198. The exception to this is
                        that there are only 8 points awarded for a break and run instead of 10 or 9 points as described
                        in
                        Section 3.13.</p>
                    <h2></a>8. English 176 (8 ball) Rules (6.1 Coming Soon)</h2>
                    <h2>8.1 Requirements of the Game</h2>

                    <p>The game is played on a rectangular 6 pocket table with the dimensions of 3'x6' with 15
                        balls and a cue ball. Balls are comprised of two numbered groups, 1-7 which are solid colored
                        balls, 9-15 are striped colored balls and the balls is a solid color black. The numerical
                        groups 1-7 and 9-15 may be represented by two different sets of 7 colored balls. Usually red
                        replaces stripes (9-15) and yellow would replace solid (1-7). B</p>
                    <h2><a name="_Toc17793213">8.2 Objective of the Game and Match</a></h2>

                    <p>A game is complete when the player or team pockets all their suited object balls in any order and
                        then legally pockets the 8 ball last. 11 games (See Exception rule 4.1) is a completed match.
                    </p>

                    <h2><a name="_Toc17793214">8.3 </a>The Rack</h2>

                    <p>Rack all fifteen (15) balls in a triangle shaped rack with the 8 ball in the middle of the third
                        row. The 8 ball is racked on the foot spot. Spread the remaining balls in random order
                        to fill out the entire rack of five (5) rows of a standard triangle rack. The head ball of the
                        triangle is placed on the foot spot in a line to the center diamond on the foot rail. Spread
                        the remaining balls in random order or in any pattern to fill out all 5 rows of a standard
                        triangle
                        rack with four (4) balls in row 4 and five (5) balls in row 5.</p>
                    <p>8.3.1 Press all the balls forward as tightly as you can so that all the balls are touching.</p>
                    <h2>8.4 Commencement of the Game</h2>

                    <p>The game starts with a break shot. Any ball may be struck on the break shot shooting at the
                        triangle shaped racked balls spreading the balls on the table. Record the number of balls made
                        on the break on the Skorbord. Player will then take BIH pocketing balls by the game rules of
                        &ldquo;anything but straight in&rdquo; shots.</p>
                    <p>Once the player fouls, scratches, misses or runs-out by the game rules, then that game is
                        completed. Player then re-racks the balls to start game 2.</p>

                    <h2>8.5 Break and Run Games</h2>

                    <p>All Rules for a Snap, Cut and COE apply to the game of Honolulu. (Refer to section 3.13)</p>
                    <h2>8.4 Fouls</h2>

                    <p>Standards Fouls apply (See Sections 3.8, 3.9, 3.10)</p>
                    <h2>8.5 Fouls on the Break</h2>

                    <p>Fouls on the break are minus one (-1) point and any ball(s) pocketed on the break are spotted in
                        sequential order on the foot spot or as close as possible to the foot spot in alignment with the
                        center diamond on the foot rail.</p>

                    <p><a name="GUIDANCE"></a></p>

                    <p>9. Honolulu (Anything Goes) Rules</p>

                    <p>Honolulu, also known as banks, kisses and combinations, and as indirect, is a call&shy;shot
                        pocket
                        billiards game in which players must pocket all shots in an indirect fashion. Anything, but
                        straight in or same rail kick shots.</p>

                    <h2>9.1 Rules</h2>

                    <p>The object of the game is to score 9 points by pocketing balls earning one point per ball legally
                        pocketed. Legal shots are limited to:</p>

                    <p>1) Banks</p>

                    <p>2) Combinations</p>

                    <p>3) Caroms/kisses</p>

                    <p>4). Billiard</p>

                    <p>5) Kick shots</p>

                    <p>6) Combination of any of the above.</p>
                    <h2>9.2 Making a Legal Shot</h2>
                    <p>Players are not allowed to shoot a ball straight into the pocket without hitting a rail (does not
                        include same rail shots See Illustration 8.1), another ball and or by being knocked in by the
                        cue
                        ball (indirectly meaning using a rail or another ball to deflect and pocketing a ball). Shots
                        must be combinations, banks, caroms, billiards, kicks, or a combination of these shots.</p>

                    <p>Kick shots cannot be made by &quot;short&shy;rail kicks.&quot; or &ldquo;same rail kicks. This
                        means that for a legal kick shot, the cue ball is NOT allowed to be first banked off a rail
                        connected with the target pocket. A legal kick the cue ball must be first banked off any
                        unconnected rail with the target pocket. is not necessary to call every detail of
                        a shot, not even whether a shot will be a bank, kiss, combination or kick &ndash; player must
                        designate the ball and target pocket to the stream by pointing to the ball first and then the
                        pocket. A player may elect to call more than one ball on a single shot, but all balls called
                        must be pocketed in the pocket(s) designated or none count.</p>

                    <h2>9.3 Racking</h2>

                    <p>Rack all fifteen (15) balls in a triangle-shaped rack. The head ball rests on the foot spot.
                        Spread the remaining balls in random order to fill out the entire rack of five (5) rows of a
                        standard triangle rack. The head ball of the triangle is placed on the foot spot in a line to
                        the center diamond on the foot rail. Spread the remaining balls in random order or in any
                        pattern to
                        fill out all 5 rows of a standard triangle rack with four (4) balls in row 4 and five (5) balls
                        in
                        row 5.</p>


                    <p>9.2.1Press the balls forward so all balls are touching or ensure all balls are touching. Film
                        Racks are recommended for this game.</p>


                    <h2>9.4 The Break</h2>

                    <p>Take the cue ball in hand behind the head string. The game starts with a break shot.
                        Shoot the cue ball at the triangle to spread the balls on the table. Any ball may be struck on
                        the break shot shooting at the triangle shaped racked balls. This is your first shot of the
                        game called your break shot.</p>

                    <p>9.4.1 On the opening break shot, the player must either call a ball out of the rack and an
                        intended pocket or cause two object balls and the cue ball to strike a rail. The failure to do
                        so is
                        a foul.</p>
                    <h2>9.5 Commencement of the Game</h2>

                    <p>Record the number of balls made on the break on the Skorbord. Player will then take BIH
                        pocketing balls by the game rules of &ldquo;anything but straight in&rdquo; shots.</p>


                    <h2>9.6 The Run</h2>

                    <p>After the break shot, the player will enter the # of balls they pocketed on the break into the
                        Skorbord earning one point per ball. The player will take BIH anywhere on the table to start
                        the Run.</p>
                    <p>9.6.1 Players are allowed to shoot any ball in any order (See Legal Shots section 9.2).
                        The goal is to pocket nine balls to be considered a Break and Run game.</p>

                    <p><em>Note: For now, we will count 1 point per ball pocketed. Once CV is up and running, we
                            will see if we can award different points for different types of shots according to
                            difficulty. Remove this note before posting rules on the website.</em></p>

                    <p>9.6.2 Once the player fouls, scratches, misses or runs-out by the game rules, then that game is
                        completed. Player then re-racks the balls to start game 2.</p>

                    <h2>9.7 Break and Run Games</h2>

                    <p>All Rules for a Snap, Cut and COE apply to the game of Honolulu. (Refer to section 3.13)</p>

                    <h2>9.7 Scoring Fouls</h2>

                    <p>The penalty for all fouls in Honolulu is the loss of a point. For a foul on the break, any
                        pocketed ball must be returned to the table&#39;s surface and the Skorbord will make a one-point
                        deduction (-1). Such spotted balls are placed on the table&#39;s long string as close as
                        possible to the foot spot, and frozen or as close as possible to frozen to any balls already
                        occupying that space in the direction of the foot rail. However, if the occupying ball is the
                        cue
                        ball, remove the cue ball and then spot the balls in any order.</p>

                    <h1><a name="_Toc17793217">10. Banks</a><br/>
                        (rules for intermediate, open, advanced &amp; semi-pro divisions)</h1>

                    <h2><a name="_Toc17793218">6.1 Currently not launched.</a></h2>

                    <h1><a name="_Toc17793223">11. 3 Cushion (3 Cushion vs. the Ghost) </a><br/>
                        (rules for intermediate, open, advanced &amp; semi-pro divisions)</h1>

                    <h2><a name="_Toc17793224">11.1 Currently not launched.</a></h2>

                    <h2><a name="_Toc17793225">11.2 3 Cushion Billiard Defined</a></h2>

                    <p>A 3 cushion billiard is made when the cue ball contacts three or more rails either before or
                        contact
                        is made with the object balls by one of the following sequences of hits:</p>

                    <p>The cue ball contacts three or more cushions and makes contact with both object balls.
                        The cue ball contacts three or more cushions, then makes contact with the first object ball,
                        then contacts one or more cushions before striking the second object ball.
                        The cue ball contacts a cushion, makes contact with the first object ball, and then contacts
                        two or more cushions before making contact with the second object ball.
                        The cue ball makes contact with the first object ball and then makes contact with three or
                        more cushions before making contact with the second object ball.
                        The cue ball makes contact with two cushions, then makes contact with the first object ball
                        and then contacts one or more cushions before making contact with the second object ball.
                        A point is earned when three cushions are contacted along with two (2) object balls in a
                        shot. The cushions do not have to be on three different cushions. </p>

                    <h2><a name="_Toc17793226">11.3 The Break</a></h2>

                    <p>12.2.1On the Break, the player must make contact with the red ball first.</p>

                    <p>12.2.2The player must Break consecutively, 7 times from the right and then consecutively 7 times
                        from
                        the left.</p>

                    <p>Anytime after the break you can take ball in hand</p>

                    <p>If you make the break then the follow points will be worth 3 points each, until you take ball in
                        hand, after you take ball in hand then 1 points</p>

                    <p>If you break and make the break, and take ball in hand, the break is worth 2 then the following
                        points
                        would be 1 point.</p>

                    <p>If you miss the break and take ball in hand then all points are worth 1 point</p>

                    <p>If you miss the break and miss your ball in hand then it's a minus 1</p>
                    <h2><a name="_Toc17793227">11.4. Scoring</a></h2>

                    <p>9.3.1 Players will use Behind the Rock SkorBord to record the points
                        for a match.</p>

                    <p>9.3.2 Players will video record their match through Behind the Rock
                        streaming software.</p>

                    <p>A point is earned when three cushions are contacted along with two (2) object balls in a
                        shot. The cushions do not have to be on three different cushions. 12. Playing Snooker (Snooker
                        vs. the Ghost)<br/>
                        (rules for intermediate, open, advanced &amp; semi-pro divisions)</p>

                    <h2><a name="_Toc17793229">12.1 Currently not launched.</a></h2>
                    <h1><a name="_Toc17793232">12. Playing Chinese 8ball (Chinese 8ball vs. the Ghost) </a><br/>
                        (rules for intermediate, open, advanced &amp; semi-pro divisions)</h1>

                    <h2><a name="_Toc17793233">12.1 Currently not launched.</a></h2>
                </div>
            </div>

        </div>
    </div>
@endsection