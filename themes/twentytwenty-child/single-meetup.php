<?php
get_header();
?>
<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Montserrat', sans-serif;
  font-size: 16px;
  color: #2c2c2c;
}
body a {
  color: inherit;
  text-decoration: none;
}

.btn {
  transition-property: all;
  transition-duration: 0.2s;
  transition-timing-function: linear;
  transition-delay: 0s;
  padding: 10px 20px;
  display: inline-block;
  margin-right: 10px;
  background-color: #fff;
  border: 1px solid #2c2c2c;
  border-radius: 3px;
  cursor: pointer;
  outline: none;
}
.btn:last-child {
  margin-right: 0;
}
.btn:hover, .btn.js-active {
  color: #fff;
  background-color: #2c2c2c;
}

.header {
  max-width: 500px;
  margin: 50px auto;
  text-align: center;
}

.header__title {
  margin-bottom: 30px;
  font-weight: 600;
  color:#fff;
}

.content {
  max-width: 800px;
  width: 95%;
  margin: 0 auto 40px;
}

.content__title {
  margin-bottom: 40px;
  font-size: 18px;
  font-weight: 600;
  text-align: center;
  color:#fff!important;
}

.timeline {
  position: relative;
  min-height: 500px;
  width: 100%;
  padding: 60px 0;
}

.timeline__bar {
  position: absolute;
  top: 0;
  left: 50%;
  width: 6px;
  height: 100%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  background-image: linear-gradient(#ffce79, #9b74ff);
}
.timeline__bar:before, .timeline__bar:after {
  position: absolute;
  left: 50%;
  display: block;
  width: 12px;
  height: 12px;
  content: '';
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  border-radius: 50%;
}
.timeline__bar:before {
  top: -1px;
  background-color: #ffce79;
}
.timeline__bar:after {
  bottom: -1px;
  background-color: #9b74ff;
}

.timeline__elem {
  position: relative;
  display: flex;
  flex-direction: column;
  margin-bottom: 30px;
}
.timeline__elem:last-child {
  margin-bottom: 0;
}
@media (min-width: 900px) {
  .timeline__elem {
    flex-direction: row;
  }
}

@media (min-width: 900px) {
  .timeline__elem--right {
    justify-content: flex-end;
  }
}

.timeline__date {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 70px;
  height: 70px;
  margin: auto;
  color: #fff;
  background-repeat: no-repeat;
  border-radius: 50%;
  border: 6px solid #fff;
}
@media (min-width: 900px) {
  .timeline__date {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
  }
}

.timeline__date-day {
  font-size: 1.35rem;
  font-weight: 600;
}

.timeline__date-month {
  font-size: .85rem;
}

.timeline__event {
  position: relative;
  width: 90%;
  margin: 30px auto 0;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
  background-color: #fff;
}
@media (min-width: 560px) {
  .timeline__event {
    width: 65%;
  }
}
@media (min-width: 900px) {
  .timeline__event {
    width: calc((100% - 70px - 8px * 4) / 2);
    margin: 0;
  }
}
.timeline__event:before {
  position: absolute;
  top: 50%;
  display: none;
  width: 0;
  height: 0;
  content: '';
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  border-top: 8px solid transparent;
  border-bottom: 8px solid transparent;
}
.timeline__event:after {
  position: absolute;
  top: 50%;
  display: none;
  width: 16px;
  height: 16px;
  content: '';
  -webkit-transform: translateY(-50%) rotate(45deg);
          transform: translateY(-50%) rotate(45deg);
}
@media (min-width: 900px) {
  .timeline__event:before, .timeline__event:after {
    display: block;
  }
}

.timeline__event--left:before {
  right: -8px;
  border-left: 8px solid #fff;
}
.timeline__event--left:after {
  right: -7px;
  box-shadow: 2px -1px 1px 0 rgba(0, 0, 0, 0.08);
}

.timeline__event--right:before {
  left: -8px;
  border-right: 8px solid #fff;
}
.timeline__event--right:after {
  left: -7px;
  box-shadow: -2px 2px 1px 0 rgba(0, 0, 0, 0.08);
}

.timeline__event-date-time {
  padding: 20px 15px 0;
  display: flex;
  margin-bottom: 15px;
  font-size: .8rem;
  color: rgba(44, 44, 44, 0.7);
}

.timeline__event-date {
  margin-right: 10px;
}

.timeline__event-title {
  padding: 0 15px;
  margin-bottom: 15px;
  font-size: 1.25rem;
  font-weight: 600;
}

.timeline__event-descr {
  padding: 0 15px 20px;
  font-size: .9rem;
  line-height: 1rem;
}
.timeline__event-descr p {
  margin-bottom: 10px;
}
.timeline__event-descr p:last-child {
  margin-bottom: 0;
}

.timeline__event-actions {
  padding: 20px 15px;
  border-top: 1px solid rgba(160, 160, 160, 0.2);
}

.timeline__event-action {
  transition-property: all;
  transition-duration: 0.2s;
  transition-timing-function: linear;
  transition-delay: 0s;
  margin-right: 24px;
  font-size: .9rem;
  text-transform: uppercase;
}
.timeline__event-action:hover {
  opacity: .4;
}
</style>
<!-- partial:index.partial.html -->
<!--PEN HEADER-->
<header class="header">
  <h1 class="header__title">Timeline Inspiration</h1>
  <div class="header__btns btns"><a class="header__btn btn" href="https://github.com/wpbeirut" title="Check on Github" target="_blanc">Check on Github</a></div>
</header>
<!--PEN CONTENT-->
<div class="content">
  <!--content title-->
  <h2 class="content__title">Material Design compatible and Responsive</h2>
  <!--content inner-->
  <div class="content__inner">
    <div class="timeline">
      <!--timeline bar-->
      <div class="timeline__bar"></div>
      <!--timeline element-->
      <div class="timeline__elem timeline__elem--left">
        <!--timeline element date-->
        <div class="timeline__date"><span class="timeline__date-day">10</span><span class="timeline__date-month">Jul</span></div>
        <!--timeline event-->
        <div class="timeline__event">
          <!--timeline event full date and time-->
          <div class="timeline__event-date-time">
            <div class="timeline__event-date"> <span>10/07/2019</span></div>
            <div class="timeline__event-time"><span>12:30</span></div>
          </div>
          <!--timeline event title-->
          <h4 class="timeline__event-title">JS meetup</h4>
          <!--timeline event descrtiption-->
          <div class="timeline__event-descr">
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
          </div>
          <!--timeline event actions links-->
          <div class="timeline__event-actions"><a class="timeline__event-action" href="#" title="Learn More">Learn More </a><a class="timeline__event-action" href="#" title="Contact Us">Contact Us </a></div>
        </div>
      </div>
      <!--timeline element-->
      <div class="timeline__elem timeline__elem--right">
        <!--timeline element date-->
        <div class="timeline__date"><span class="timeline__date-day">18</span><span class="timeline__date-month">Jul</span></div>
        <!--timeline event-->
        <div class="timeline__event">
          <!--timeline event full date and time-->
          <div class="timeline__event-date-time">
            <div class="timeline__event-date"> <span>18/07/2019</span></div>
            <div class="timeline__event-time"><span>12:30</span></div>
          </div>
          <!--timeline event title-->
          <h4 class="timeline__event-title">CSS Con</h4>
          <!--timeline event descrtiption-->
          <div class="timeline__event-descr">
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
          </div>
          <!--timeline event actions links-->
          <div class="timeline__event-actions"><a class="timeline__event-action" href="#" title="Learn More">Learn More </a><a class="timeline__event-action" href="#" title="Contact Us">Contact Us</a></div>
        </div>
      </div>
      <!--timeline element-->
      <div class="timeline__elem timeline__elem--left">
        <!--timeline element date-->
        <div class="timeline__date"><span class="timeline__date-day">23</span><span class="timeline__date-month">Jul</span></div>
        <!--timeline event-->
        <div class="timeline__event">
          <!--timeline event full date and time-->
          <div class="timeline__event-date-time">
            <div class="timeline__event-date"> <span>23/07/2019</span></div>
            <div class="timeline__event-time"><span>07:30</span></div>
          </div>
          <!--timeline event title-->
          <h4 class="timeline__event-title">React Workshop</h4>
          <!--timeline event descrtiption-->
          <div class="timeline__event-descr">
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
          </div>
          <!--timeline event actions links-->
          <div class="timeline__event-actions"><a class="timeline__event-action" href="#" title="Learn More">Learn More </a><a class="timeline__event-action" href="#" title="Contact Us">Contact Us </a></div>
        </div>
      </div>
      <!--timeline element-->
      <div class="timeline__elem timeline__elem--left">
        <!--timeline element date-->
        <div class="timeline__date"><span class="timeline__date-day">06</span><span class="timeline__date-month">Aug</span></div>
        <!--timeline event-->
        <div class="timeline__event">
          <!--timeline event full date and time-->
          <div class="timeline__event-date-time">
            <div class="timeline__event-date"> <span>06/08/2019</span></div>
            <div class="timeline__event-time"><span>12:30</span></div>
          </div>
          <!--timeline event title-->
          <h4 class="timeline__event-title">Angular Meetup</h4>
          <!--timeline event descrtiption-->
          <div class="timeline__event-descr">
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
          </div>
          <!--timeline event actions links-->
          <div class="timeline__event-actions"><a class="timeline__event-action" href="#" title="Learn More">Learn More </a><a class="timeline__event-action" href="#" title="Contact Us">Contact Us</a></div>
        </div>
      </div>
      <!--timeline element-->
      <div class="timeline__elem timeline__elem--right">
        <!--timeline element date-->
        <div class="timeline__date"><span class="timeline__date-day">17</span><span class="timeline__date-month">Aug</span></div>
        <!--timeline event-->
        <div class="timeline__event">
          <!--timeline event full date and time-->
          <div class="timeline__event-date-time">
            <div class="timeline__event-date"> <span>17/08/2019</span></div>
            <div class="timeline__event-time"><span>16:30</span></div>
          </div>
          <!--timeline event title-->
          <h4 class="timeline__event-title">Vue.js Con</h4>
          <!--timeline event descrtiption-->
          <div class="timeline__event-descr">
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
          </div>
          <!--timeline event actions links-->
          <div class="timeline__event-actions"><a class="timeline__event-action" href="#" title="Learn More">Learn More </a><a class="timeline__event-action" href="#" title="Contact Us">Contact Us</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script>
  //DOM STRINGS OBJECT
const DOM = {
  timelineDate: document.querySelectorAll('.timeline__date'),
  timelineElem: document.querySelectorAll('.timeline__elem'),
  timelineBar: document.querySelector('.timeline__bar') };


//TIMELINE ELEM SET DIRECTION TO EVENT ITEMS (left or right oriented)

//getting direction from .timeline-elem
const __getDir = timelineElem => {

  if (timelineElem.classList.contains('timeline__elem--left')) {
    return 'left';
  } else if (timelineElem.classList.contains('timeline__elem--right')) {
    return 'right';
  }

};

const setDirEvent = () => {

  DOM.timelineElem.forEach(elem => {

    const direction = __getDir(elem);

    const timelineEvent = elem.querySelector('.timeline__event');

    timelineEvent.classList.add(`timeline__event--${direction}`);

  });

};

//TIMELINE ELEM DATE STYLES (background)
const __getBGImage = () => {

  const compStyle = getComputedStyle(DOM.timelineBar);

  return compStyle.backgroundImage;

};

const __getBGSize_height = () => {

  const timebarHeight = DOM.timelineBar.offsetHeight;

  return timebarHeight;

};

const __getBGPos_y = dateElem => {

  const timelinebarBox = DOM.timelineBar.getBoundingClientRect();

  const dateBox = dateElem.getBoundingClientRect();

  const pos_y = dateBox.top - timelinebarBox.top;

  return pos_y;

};

const setDateBG = () => {

  const bgImg = __getBGImage();

  const bgHeight = __getBGSize_height();

  DOM.timelineDate.forEach(elem => {

    //setting bgImage
    elem.style.backgroundImage = bgImg;

    //setting bgSize
    elem.style.backgroundSize = `100% ${bgHeight}px`;

    //setting bgPosition
    const dateOffset = __getBGPos_y(elem);

    elem.style.backgroundPosition = `0 -${dateOffset}px`;

  });

};

//ONLOAD FUNCTION
window.addEventListener('load', () => {

  //setting direction class to the timeline event block
  setDirEvent();

  //set date background styles
  setDateBG();

});
  </script>

<?php

get_footer();