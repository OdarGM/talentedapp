    Rails.application.routes.draw do
      resources :chatrooms
      resources :chats
      get '/dashboard', to: 'chats#index'
      root 'chatrooms#index'
    end
