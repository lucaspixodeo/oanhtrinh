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

    // Calculate expiration time (600 minutes from now)
    const expirationTime = Date.now() + (600 * 60 * 1000) // 60 minutes in milliseconds

    // Store authentication token or user data in local storage
    localStorage.setItem('token', data.token)
    localStorage.setItem('tokenExpiration', expirationTime)
    localStorage.setItem('user', JSON.stringify(data.user))

    return data.user // Return user data after successful login
  } catch (error) {
    console.error('Login failed:', error.message)
    throw error
  }
}

export function checkAuth() {
  const token = localStorage.getItem('token')
  const tokenExpiration = localStorage.getItem('tokenExpiration')

  if (!token || token == 'undefined' || !tokenExpiration) {
    // Token or expiration time not found, user not logged in or token expired
    return false
  }

  const now = Date.now()

  if (now > parseInt(tokenExpiration, 10)) {
    // Token expired, clear token and return null
    localStorage.removeItem('token')
    localStorage.removeItem('tokenExpiration')
    localStorage.removeItem('user')
    console.error('Authentication failed:', 'Token expired')

    return false
  }

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
}
