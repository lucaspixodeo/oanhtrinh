export async function register(userData) {
  try {
    const response = await fetch('/api/register', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(userData),
    })

    if (!response.ok) {
      const errorData = await response.json()
      throw new Error(errorData.message || 'Registration failed')
    }

    const data = await response.json()

    // Optionally, you can handle the successful registration response here
    // For example, you might redirect the user to the login page
    console.log('Registration successful:', data)

    return data // Return data if needed
  } catch (error) {
    console.error('Registration failed:', error.message)
    throw error
  }
}

export async function login(credentials) {
  try {
    const response = await fetch('/api/login', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(credentials),
    })

    if (!response.ok) {
      const errorData = await response.json()
      throw new Error(errorData.message || 'Login failed')
    }

    const data = await response.json()

    // Store authentication token or user data in local storage
    localStorage.setItem('token', data.token)
    localStorage.setItem('user', JSON.stringify(data.user))

    return data.user // Return user data after successful login
  } catch (error) {
    console.error('Login failed:', error.message)
    throw error
  }
}

export function checkAuth() {
  const token = localStorage.getItem('token')

  // Check if token exists and is not expired
  if (token && token != 'undefined') {
    // Make an API request to verify the token validity
    // For example, you can send a request to a /api/user endpoint
    // and check if the response is successful
    // Here's a basic example using fetch:
    return fetch('/api/user', {
      headers: {
        Authorization: `Bearer ${token}`,
      },
    })
      .then(response => {
        if (!response.ok) {
          throw new Error('Authentication failed')
        }

        return true // Authentication successful
      })
      .catch(error => {
        console.error('Authentication failed:', error)

        return false // Authentication failed
      })
  } else {
    return false // No token found
  }
}
