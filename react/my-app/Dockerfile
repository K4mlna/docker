FROM node:latest

WORKDIR /app
COPY package.json yarn.lock ./

RUN npm i

COPY . /app

RUN npm run build

EXPOSE 3000

CMD ["npm", "start"]
 
