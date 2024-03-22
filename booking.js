// Check if the URL contains the query parameter for reference
const urlParams = new URLSearchParams(window.location.search);
const reference = urlParams.get('reference');

// Hash the reference
hashString(reference)
  .then(hashedReference => {
    // Validate the reference
    const isValidReference = validateReference(reference);

    // If the reference is valid, redirect to the specified URL
    if (isValidReference) {
      sessionStorage.setItem('payment_hashed_reference', hashedReference);
      window.location.href = 'http://localhost/nancyogboi/?page_id=43';
    }

    // Redirect if the reference is not valid
    else {
      window.location.href = 'index.php'; // Redirect to home page
    }
  });

// Function to validate the reference
function validateReference(reference) {
  // Example validation: Check if the reference is not null and is a valid format
  return reference !== null && reference.match(/^T\d{15}$/) !== null;
}

// Function to hash a string using SHA-256
async function hashString(input) {
  const encoder = new TextEncoder();
  const data = encoder.encode(input);

  const buffer = await window.crypto.subtle.digest('SHA-256', data);
  const hashArray = Array.from(new Uint8Array(buffer));
  const hashHex = hashArray.map(byte => byte.toString(16).padStart(2, '0')).join('');
  return hashHex;
}
