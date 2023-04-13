# Set the base image
FROM node:19-alpine

# Set the working directory
WORKDIR /app

# Install dependencies
COPY package.json yarn.lock ./
RUN yarn install --frozen-lockfile

# Copy website code
COPY . .

# Build the website
RUN yarn build

# Expose the port
EXPOSE 3000

# Run the website
CMD ["yarn", "dev", "--host"]

