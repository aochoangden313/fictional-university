const path = require('path');

module.exports = {
  entry: {
    index: './src/index.js',
    frontend: './src/frontend.js',
  },
  output: {
    path: path.resolve(__dirname, 'build'),
    filename: '[name].bundle.js', // Tạo file riêng cho từng entry
  },
  module: {
    rules: [
      {
        test: /\.css$/,
        use: ['style-loader', 'css-loader'], // Loader cho CSS
      },
      {
        test: /\.scss$/,
        use: ['style-loader', 'css-loader', 'sass-loader'], // Loader cho SCSS
      },
      {
        test: /\.jsx?$/, // Xử lý cả file .js và .jsx
        exclude: /node_modules/, // Loại trừ thư mục node_modules
        use: {
          loader: 'babel-loader', // Sử dụng Babel Loader
          options: {
            presets: ['@babel/preset-env', '@babel/preset-react'], // Thêm presets cho Babel
          },
        },
      },
    ],
  },
  resolve: {
    extensions: ['.js', '.jsx'], // Hỗ trợ import không cần phần mở rộng .js và .jsx
  },
  devtool: 'source-map', // Tùy chọn để tạo source map (hữu ích khi debug)
};
