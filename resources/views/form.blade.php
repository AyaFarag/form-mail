@include('header')

<div class="section" id="section4">
                
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 offset-0 col-xs-12">
                     {!! Form::open(['url'=>'/form', 'method' => 'postcontact']) !!}
                            {{ csrf_field() }}
                                <h1>Book <span>T</span>icket</h1>
                                
                                <label>Contact Information<span>&#42;</span></label>
                                
                                <input type="text" placeholder="First Name" required name="firstname">
                                
                                <input type="text" placeholder="Last Name" required name="lastname">
                                
                                <input type="text" placeholder="Title" required name="title">
                                <input type="text" placeholder="Mobile" required name="mobile">
                                <input type="text" placeholder="Business Email" required name="email">
                                
                                <label>Company Information<span>&#42;</span></label>
                                
                                <input type="text" placeholder="Company Name" required name="companyname">
                                
                                <input type="text" placeholder="Country" required name="country">
                                
                                <input type="text" placeholder="Company Size" required name="companysize">
                                
                                <input type="text" placeholder="Company Phone" required name="companyphone">
                               <!--
                                 <label class="custom-file-upload">
                                    <input type="file"/>
                                     Company Profile <span>Upload</span>
                                </label>
                                -->
                                <input type="text" placeholder="Company Website" name="companywebsite">
                                
                                <textarea placeholder="How did you hear about us?" name="heardaboutus"></textarea>
                                
                                <input type="submit" value="BOOKNOW" class="bookbtn" name="action">
                                
                                <span>Made With <i class="fa fa-heart" aria-hidden="true"></i> by <a href="http://turnoneg.com/" target="_blank">TurnON</a></span>
                            </form>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-md-6 col-md-offset-3 offset-0 col-xs-12 social">
                                <ul>
                                    <li><a href="#" class="fa fa-facebook" aria-hidden="true"></a></li>
                                    <li><a href="#" class="fa fa-twitter" aria-hidden="true"></a></li>
                                    <li><a href="#" class="fa fa-instagram" aria-hidden="true"></a></li>
                                    <li><a href="#" class="fa fa-youtube-play" aria-hidden="true"></a></li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>

@include('footer')