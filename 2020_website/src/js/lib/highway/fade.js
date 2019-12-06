import Highway from '@dogstudio/highway';
import { TimelineMax, CSSPlugin }  from 'gsap/all';

const plugins = [ CSSPlugin ];

export default class Fade extends Highway.Transition {
	out({from, to, done}) {
		new TimelineMax()
		.fromTo(from, .5, {autoAlpha: 1}, {autoAlpha: 0, delay: 5})

		setTimeout(function() {
			done();
		}, 500);
	}

	in({from, to, done}) {
		from.remove();

		new TimelineMax()
		.fromTo(to, .5, {autoAlpha: 0}, {autoAlpha: 1, delay: .5})

		done();
	}
}
