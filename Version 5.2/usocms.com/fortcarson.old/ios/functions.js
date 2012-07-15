/*
 File: iPhoneOrientation.js 
 
 Abstract: Defines JavaScript functionality for the iPhoneOrientation sample.
           Detects iPhone or iPod touch orientation events, determines the devices' orientation,
           sets the html body's class attribute according to the current orientation, and
           displays a descriptive message on the "Handling iPhone or iPod touch Orientation Events" page.
 
 Version: <1.0>
 The Apple Software is provided by Apple on an "AS IS" basis.  APPLE
 MAKES NO WARRANTIES, EXPRESS OR IMPLIED, INCLUDING WITHOUT LIMITATION
 THE IMPLIED WARRANTIES OF NON-INFRINGEMENT, MERCHANTABILITY AND FITNESS
 FOR A PARTICULAR PURPOSE, REGARDING THE APPLE SOFTWARE OR ITS USE AND
 OPERATION ALONE OR IN COMBINATION WITH YOUR PRODUCTS.
 
 IN NO EVENT SHALL APPLE BE LIABLE FOR ANY SPECIAL, INDIRECT, INCIDENTAL
 OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 INTERRUPTION) ARISING IN ANY WAY OUT OF THE USE, REPRODUCTION,
 MODIFICATION AND/OR DISTRIBUTION OF THE APPLE SOFTWARE, HOWEVER CAUSED
 AND WHETHER UNDER THEORY OF CONTRACT, TORT (INCLUDING NEGLIGENCE),
 STRICT LIABILITY OR OTHERWISE, EVEN IF APPLE HAS BEEN ADVISED OF THE
 POSSIBILITY OF SUCH DAMAGE.
 
 Copyright (C) 2007 Apple Inc. All Rights Reserved.
 */
 
/* updateOrientation checks the current orientation, sets the body's class attribute to portrait, landscapeLeft, or landscapeRight, 
   and displays a descriptive message on "Handling iPhone or iPod touch Orientation Events".  */
function updateOrientation()
{
	/*window.orientation returns a value that indicates whether iPhone is in portrait mode, landscape mode with the screen turned to the
	  left, or landscape mode with the screen turned to the right. */
	var orientation=window.orientation;
	switch(orientation)
	{
		case 0:
				/* If in portrait mode, sets the body's class attribute to portrait. Consequently, all style definitions matching the body[class="portrait"] declaration
				   in the iPhoneOrientation.css file will be selected and used to style "Handling iPhone or iPod touch Orientation Events". */
				document.body.setAttribute("class","portrait");		
				/* Add a descriptive message on "Handling iPhone or iPod touch Orientation Events"  */
				document.getElementById("currentOrientation").innerHTML="Now in portrait orientation (Home button on the bottom).";
				break;	
		case 90:
				/* If in landscape mode with the screen turned to the left, sets the body's class attribute to landscapeLeft. In this case, all style definitions matching the
				   body[class="landscapeLeft"] declaration in the iPhoneOrientation.css file will be selected and used to style "Handling iPhone or iPod touch Orientation Events". */
				document.body.setAttribute("class","landscapeLeft");
				document.getElementById("currentOrientation").innerHTML="Now in landscape orientation and turned to the left (Home button to the right).";
				break;
		case -90:	
				/* If in landscape mode with the screen turned to the right, sets the body's class attribute to landscapeRight. Here, all style definitions matching the 
				   body[class="landscapeRight"] declaration in the iPhoneOrientation.css file will be selected and used to style "Handling iPhone or iPod touch Orientation Events". */
				document.body.setAttribute("class","landscapeRight");
				document.getElementById("currentOrientation").innerHTML="Now in landscape orientation and turned to the right (Home button to the left).";
				break;
	}
}
// Point to the updateOrientation function when iPhone switches between portrait and landscape modes.
window.onorientationchange=updateOrientation;

	
		


