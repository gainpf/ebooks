import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';
import PDFObject from 'pdfobject';
import $ from 'jquery';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap-icons/font/bootstrap-icons.min.css';


// const pdf_path = $("#path_even_in_our_darkness").data("path");

// PDFObject.embed(pdf_path, "#myebook");

// $(".readdd").click(function(e){
//     e.preventDefault();
//     const ebook_path = $("#ebook_path").data("path");
//     const pdf_path = $(this).data("path");
 
//     var newTab = window.open(ebook_path, "__blank");
//     newTab.focus();
//     alert($("#myebook"))
//     // let container = document.querySelector("#myebook");
//           PDFObject.embed(pdf_path, "#myebook");

   
//     // $.ajax({
//     //     url: ebook_path, 
//     //     async: false,
//     //     success: function(result){
//     //       let container = document.querySelector("#myebook");
//     //       PDFObject.embed(pdf_path, container);
//     // }});
// });


  


  // Helper Functions
//   function createBookCard(book) {
//     return `
//       <div class="book-card">
//         <div class="book-card-image">
//           <img src="${book.cover}" alt="${book.title}">
//           ${book.isBestseller ? '<span class="badge bestseller">Bestseller</span>' : ''}
//         </div>
//         <div class="book-card-content">
//           <h3>${book.title}</h3>
//           <p class="book-card-author">${book.author}</p>
//           <div class="book-card-footer">
//             <span class="book-card-price">$${book.price.toFixed(2)}</span>
//             <button class="primary-btn">Add to Cart</button>
//           </div>
//         </div>
//       </div>
//     `;
//   }
  
//   function createCategoryCard(category) {
//     return `
//       <div class="category-card">
//         <img src="${category.image}" alt="${category.name}">
//         <div class="overlay">
//           <h3>${category.name}</h3>
//         </div>
//       </div>
//     `;
//   }
  
//   // Initialize Featured Books
//   const featuredBooks = books.filter(book => book.isFeatured);
//   document.getElementById('featured-books').innerHTML = featuredBooks
//     .map(book => createBookCard(book))
//     .join('');
  
//   // Initialize Categories
//   document.getElementById('categories').innerHTML = categories
//     .map(category => createCategoryCard(category))
//     .join('');
  
//   // Initialize Bestsellers
//   const bestsellers = books.filter(book => book.isBestseller);
//   document.getElementById('bestsellers').innerHTML = bestsellers
//     .map(book => createBookCard(book))
//     .join('');
  
//   // Carousel Navigation
//   const carousel = document.getElementById('bestsellers');
//   const prevBtn = document.getElementById('prev-bestseller');
//   const nextBtn = document.getElementById('next-bestseller');
  
//   prevBtn.addEventListener('click', () => {
//     carousel.scrollBy({ left: -300, behavior: 'smooth' });
//   });
  
//   nextBtn.addEventListener('click', () => {
//     carousel.scrollBy({ left: 300, behavior: 'smooth' });
//   });
  
//   // Newsletter Form
//   const newsletterForm = document.getElementById('newsletter-form');
//   newsletterForm.addEventListener('submit', (e) => {
//     e.preventDefault();
//     const email = e.target.querySelector('input[type="email"]').value;
//     alert(`Thank you for subscribing with: ${email}`);
//     e.target.reset();
//   });
  
//   // Cart Functionality
//   let cartCount = 0;
//   const cartCountElement = document.querySelector('.cart-count');
  
//   document.addEventListener('click', (e) => {
//     if (e.target.matches('.primary-btn') && e.target.textContent === 'Add to Cart') {
//       cartCount++;
//       cartCountElement.textContent = cartCount;
      
//       // Animation feedback
//       e.target.textContent = 'Added!';
//       e.target.style.backgroundColor = '#059669';
//       setTimeout(() => {
//         e.target.textContent = 'Add to Cart';
//         e.target.style.backgroundColor = '';
//       }, 1500);
//     }
//   });
