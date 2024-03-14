// Check if the URL contains the query parameter for reference
const urlParams = new URLSearchParams(window.location.search);
const reference = urlParams.get('reference');

// Validate the reference (you would replace this with your validation logic)
const isValidReference = validateReference(reference);

// Redirect if the reference is not valid
if (!isValidReference) {
  window.location.href = 'https://paystack.com/pay/silastest'; // Redirect to home page
  console.log('Invalid reference');
}

// Function to validate the reference (replace this with your validation logic)
function validateReference(reference) {
  // Example validation: Check if the reference is not null and is a valid format
  return reference !== null && reference.match(/^T\d{15}$/) !== null;
}
