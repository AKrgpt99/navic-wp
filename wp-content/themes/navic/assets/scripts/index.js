window.addEventListener("DOMContentLoaded", () => {
  /**
   * Menu Animation
   *
   * When the mouse hovers over the menu container, the
   * animation starts. The event listener was added to the menu
   * container and not the button so that the menu stays open
   * while the mouse can hover over the buttons.
   */
  const menuMouseArea = document.querySelector("#header-menu-wrapper"),
    slash1 = document.querySelector(".slash-1"),
    slash2 = document.querySelector(".slash-2"),
    bar1 = document.querySelector(".bar-1"),
    bar2 = document.querySelector(".bar-2"),
    initialProps = {
      targets: "#primary-menu-wrapper",
      easing: "easeInOutQuad",
      duration: 500,
    };

  menuMouseArea.addEventListener("mouseenter", () => {
    // // Menu button animation
    // slash1.classList.add("slash-1-rotated");
    // slash2.classList.add("slash-2-rotated");

    // bar1.classList.add("bar-1-scaled");
    // bar2.classList.add("bar-2-scaled");

    // Show menu
    anime(
      Object.assign(initialProps, {
        opacity: 1,
        translateX: "-60%",
      })
    );
  });

  menuMouseArea.addEventListener("mouseleave", () => {
    // // Menu button animation
    // slash1.classList.remove("slash-1-rotated");
    // slash2.classList.remove("slash-2-rotated");

    // bar1.classList.remove("bar-1-scaled");
    // bar2.classList.remove("bar-2-scaled");

    // Show menu
    anime(
      Object.assign(initialProps, {
        opacity: 0,
        translateX: "60%",
      })
    );
  });
});

/**
 * Pagination
 *
 * When scroll event is triggered at a specific anchor point
 * (on the y-axis), the pagination animation starts. This
 * code was modified from the reference(s) listed below.
 *
 * Reference(s):
 * - http://www.html5rocks.com/en/tutorials/speed/animations/
 */
// const contentPage = (state) =>
//   document.querySelector(".content-wrapper").children[state - 1];

// let contentPageState = 1;
// let prevScrollPosition = 0;
// let ticking = false;

// const handlePageScroll = (scrollPosition, offsetY) => {
//   let currScrollPos = window.scrollY;
//   let prevScrollPos = scrollPosition;

//   // console.log("curr" + currScrollPos);
//   // console.log("prev" + prevScrollPosition);

//   if (currScrollPos > prevScrollPos + offsetY) {
//     // User scrolls down past at least the offsetY value

//     document.querySelector("body").style.overflow = "hidden";
//     window.scrollTo(0, 0);

//     anime({
//       targets: `#content-${contentPageState + 1}`,
//       translateY: "100vh",
//     });
//   }

//   prevScrollPosition = currScrollPos;
//   ticking = false;
// };

// window.addEventListener("scroll", async function () {
//   if (!ticking) {
//     await handlePageScroll(prevScrollPosition, 24);

//     ticking = true;
//   }
// });
